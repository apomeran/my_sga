<?php

class ApartadoMateriaNotaController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'createstep', 'createstep2', 'viewall', 'view_calificaciones' ,'view_calificaciones_materia'),
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
	
	public function actionViewall(){
		$cursos = Curso::model()->findAll();
		$this->render('view_all',array(
			'cursos' => $cursos,
		));
	}
	
	public function actionView_calificaciones($id){

		$curso_d = CursoMateria::model()->findAllByAttributes(array('curso'=>$id));
		$materias = array();
		foreach($curso_d as $curso){
			$materias[] = $curso->materia0;
		 }
		$this->render('view_calificaciones',array(
			'materias' => $materias,
			'curso_id' => $id
		));
	}
	
	public function actionView_calificaciones_materia($id , $curso_id, $periodo = 1){

		$alumnos = array();
		$materia = Materia::model()->findByPk($id);
		$curso = Curso::model()->findByPk($curso_id);
		$alumnos_d = $curso->cursoAlumnos;
		
		foreach($alumnos_d as $alumno_d){
			$alumnos[] = $alumno_d->alumno0;
		 
		 }
		$this->render('view_calificaciones_materia',array(
			'param1' => $id,
			'param2' => $curso_id,
			'materia' => $materia,
			'alumnos'=> $alumnos,
			'curso' => $curso,
			'periodo' => $periodo
		));
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
	public function actionCreate()
	{
		$model=new ApartadoMateriaNota;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ApartadoMateriaNota']))
		{
			$model->attributes=$_POST['ApartadoMateriaNota'];
			if($model->save()){
					$this->redirect(array('apartadoMateriaNota/createstep', 'id'=>$model->id));
			 }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionCreatestep($id)
	{
		
		$this->render('create_note',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	public function actionCreatestep2($id, $id_alumno, $id_materia)
	{
		 if(isset($_POST['ApartadoMateriaNota'])){
			   $model = $this->loadModel($id);
			// $alumno_id = $model->alumno;
			
			   $model->attributes=$_POST['ApartadoMateriaNota'];
			  if($model->save()){
				
				  $model= new ApartadoMateriaNota('insert');
				  $model->alumno = $id_alumno;
				  $model->periodo = 0;
				  $model->save();
				  $_POST = null;
				$this->redirect(array('apartadoMateriaNota/createstep2', 'id' => $model->id , 'id_alumno' => $id_alumno, 'id_materia' => $id_materia));
			  }
		 }
	
		$this->render('create_note_2',array(
			'model'=>$this->loadModel($id), 'id_alumno' => $id_alumno, 'id_materia' => $id_materia
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

		if(isset($_POST['ApartadoMateriaNota']))
		{
			$model->attributes=$_POST['ApartadoMateriaNota'];
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

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ApartadoMateriaNota');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ApartadoMateriaNota('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ApartadoMateriaNota']))
			$model->attributes=$_GET['ApartadoMateriaNota'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ApartadoMateriaNota the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ApartadoMateriaNota::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ApartadoMateriaNota $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='apartado-materia-nota-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
