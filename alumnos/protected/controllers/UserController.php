<?php

class UserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','queue','view', 'changepwd', 'create', 'update'),
				'users'=>array('admin'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('account', 'changepwd', 'changedata'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	 
	public function actionAccount(){
	  $user = Yii::app()->user;
	  $user_data = Padres::model()->findByAttributes(array('usuario' => $user->id));
	  $this->render('account',array(
					'user'=> $user,
					'user_data' => $user_data
				));
				
	}
	
	public function actionChangedata($id){
		
		$model =  Padres::model()->findByPk($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Padres'])) {
            $model->attributes = $_POST['Padres'];
            if ($model->save())
                $this->redirect(array('account'));
        }

        $this->render('update_user_data', array(
            'model' => $model,
        ));
    
	}
	
	public function actionChangepwd($id){
	
		$model=$this->loadModel($id);
		$user = Yii::app()->user;
		if ($user->getId() != $id){
			throw new CHttpException(403,'Operación no permitida');
			die;
		}
		
		if(isset($_POST['User']))
		{
			if ($model->password == crypt($_POST['User']['password'], $model->password)){
				$model->password = crypt($_POST['User']['npassword']);
				if ($model->save()){
				
					$this->render('msg_pwd',array(
						'message'=>"Se cambio exitosamente la contraseña",
					));
				
				}
			}else{
				$this->render('msg_pwd',array(
					'message'=>"La contraseña ingresada es incorrecta",
				));
				
			}
			die;
		}
		$this->render('changepwd',array(
			'model'=>$model,
		));
	}
	public function actionCreate()
	{
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			
			$model->attributes=$_POST['User'];
			$model->password = crypt($_POST['User']['password']);
			$model->rol = 4;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if(isset($_POST['User']['password']))
			{
			$model->password = crypt($_POST['User']['password']);
			}
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function actionQueue(){
		$users = User::model()->findAll();
		$auth = Yii::app()->authManager;
		$queue_name = "queue_amanecer";
		$queue = Yii::app()->getComponent($queue_name);
		
		//CHECK WITH THIS
		foreach($users as $user){
			try{
				$auth->assign('nfy.queue.read', $user->id);
				echo "Assigned User Permissions<br>";
			}
			catch(Exception $e){
				// CATCH DB EXCEPTION ON DUPLICATED ENTRY
			}
			$category_curso = "";
			if ($user->rol == 1){ //CASO DE UN PADRE - BUSCO LOS CURSOS DE SUS HIJOS PARA SABER EN QUE
				//GRUUPO DE PRECEPTORES TIENE QUE ESTAR
				$padres = Padres::model()->findByAttributes(array('usuario'=>$user->id));
				$alumnos = null;
				
				if ($padres != null)
					$alumnos = Alumnos::model()->findAllByAttributes(array(), "padreid = " .$padres->idpadre. " OR madreid = " .$padres->idpadre);
				if ($alumnos != null){
					foreach($alumnos as $alumno){
						$category_curso .=  ",curso_id_" . $alumno->cursoactualid;
					}
				}
			}
			if ($user->rol == 2){
				$preceptor = Preceptores::model()->findByAttributes(array('usuario'=>$user->id));
				if ($preceptor != null){
						$category_curso .=  ",curso_id_" . $preceptor->curso;
				}
			}
			if($user->registered_queue == 0) {
				$nfy = new NfySubscriptions;
				$nfy->queue_id = $queue_name;
				$cat = "";
				if ($user->rol == 2){
					$nfy->label = 'admin,preceptor' . $category_curso;
					$cat = 'admin,preceptor' . $category_curso;
				}
				if ($user->rol == 1){
					$nfy->label = 'admin,padre' . $category_curso;
					$cat = 'admin,padre' . $category_curso;
				}
				if ($user->rol == 3){
					$nfy->label = 'admin';
					$cat = 'admin';
				}
				$nfy->subscriber_id = $user->id;
				$nfy->is_deleted = 0;
				if ($nfy->save()){
					$nfyCat = new NfySubscriptionCategories;
					$nfyCat->subscription_id = $nfy->id;
					$nfyCat->category = $cat;
					$nfyCat->is_exception = 0;
					$nfyCat->save();
					$user->registered_queue = 1;
					$user->save();
					echo "Saved <br>";
				}
			}
		}
		echo "Done!";
	}
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}



