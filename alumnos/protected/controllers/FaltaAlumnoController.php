<?php

class FaltaAlumnoController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
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
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'createstep', 'Mydelete', 'viewall', 'view_faltas', 'View_faltas_materia'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionViewall() {


        if (Yii::app()->user->isPreceptor()) {

            $cursos = Yii::app()->user->getPreceptorCursos();
            $this->render('view_all', array(
                'cursos' => $cursos,
            ));
        } else {
            $this->render('forbidden', array(
            ));
        }
    }

    public function actionView_faltas($id) {

        if (Yii::app()->user->isAdmin() || (Yii::app()->user->isPreceptor() && Yii::app()->user->isValidCurso($id))) {

            $curso = Curso::model()->findByPk($id);
            $alumnos = array();
            $alumnos_d = $curso->cursoAlumnos;
            foreach ($alumnos_d as $alumno_d) {
                $alumnos[] = $alumno_d->alumno0;
            }
            $this->render('view_faltas', array(
                'curso' => $curso,
                'alumnos' => $alumnos,
            ));
        } else {
            $this->render('forbidden', array(
            ));
        }
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        if (Yii::app()->user->isAdmin() || (Yii::app()->user->isPreceptor() && Yii::app()->user->isValidCurso($id))) {
            $this->render('view', array(
                'model' => $this->loadModel($id),
            ));
        } else {
            $this->render('forbidden', array(
            ));
        }
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($id_alumno = null) {
		
		if($id_alumno != null){
			
			if (Alumnos::model()->findByPk($id_alumno) != null){
				
				$model = new FaltaAlumno;
				$model->alumno = $id_alumno;
				if ($model->save()) {
                    $this->redirect(array('FaltaAlumno/createstep', 'id' => $model->id));
                }
			}else{
				echo "<br> <b>Error</b> <br>El alumno con id $id_alumno no existe <br>";
			}
		}
		
        if (Yii::app()->user->isPreceptor()) {
            $model = new FaltaAlumno;

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if (isset($_POST['FaltaAlumno'])) {
                $model->attributes = $_POST['FaltaAlumno'];
                if ($model->save()) {
                    $this->redirect(array('FaltaAlumno/createstep', 'id' => $model->id));
                }
            }

            $this->render('create', array(
                'model' => $model,
            ));
        } else {
            $this->render('forbidden', array(
            ));
        }
    }

    public function actionCreatestep($id) {
        if (Yii::app()->user->isPreceptor()) {
            if (isset($_POST['FaltaAlumno'])) {
                $model = $this->loadModel($id);
                $alumno_id = $model->alumno;
                $model->curso = Alumnos::model()->findByPk($alumno_id)->cursoactualid;
                $model->date_inasistencia = $_POST['FaltaAlumno']['date_inasistencia'];
                $model->attributes = $_POST['FaltaAlumno'];
                if ($model->save()) {
                    $model = new FaltaAlumno('insert');
                    $model->id = $id + 1;
                    $model->alumno = $alumno_id;
                    $model->save();
                    $this->redirect(array('FaltaAlumno/createstep', 'id' => $model->id));
                }
            }

            $this->render('create_falta', array(
                'model' => $this->loadModel($id),
            ));
        } else {
            $this->render('forbidden', array(
            ));
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        if (Yii::app()->user->isPreceptor()) {
            $model = $this->loadModel($id);

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if (isset($_POST['FaltaAlumno'])) {
                $model->attributes = $_POST['FaltaAlumno'];
                if ($model->save())
                    $this->redirect(array('view', 'id' => $model->id));
            }

            $this->render('update', array(
                'model' => $model,
            ));
        }else {
            $this->render('forbidden', array(
            ));
        }
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionMydelete($id, $redirect_id) {
        if (Yii::app()->user->isPreceptor()) {
            $this->loadModel($id)->delete();
            $this->redirect(array('FaltaAlumno/createstep', 'id' => $redirect_id));
        } else {
            $this->render('forbidden', array(
            ));
        }
    }

    public function actionDelete($id) {
        if (Yii::app()->user->isPreceptor()) {

            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }else {
            $this->render('forbidden', array(
            ));
        }
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        if (Yii::app()->user->isPreceptor()) {

            $dataProvider = new CActiveDataProvider('FaltaAlumno');
            $this->render('index', array(
                'dataProvider' => $dataProvider,
            ));
        } else {
            $this->render('forbidden', array(
            ));
        }
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {

        if (Yii::app()->user->isPreceptor()) {
            $model = new FaltaAlumno('search');
            $model->unsetAttributes();  // clear any default values
            if (isset($_GET['FaltaAlumno']))
                $model->attributes = $_GET['FaltaAlumno'];

            $this->render('admin', array(
                'model' => $model,
            ));
        }else {
            $this->render('forbidden', array(
            ));
        }
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return FaltaAlumno the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        if (Yii::app()->user->isPreceptor()) {
            $model = FaltaAlumno::model()->findByPk($id);
            if ($model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
            return $model;
        }else {
            $this->render('forbidden', array(
            ));
        }
    }

    /**
     * Performs the AJAX validation.
     * @param FaltaAlumno $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'falta-alumno-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
