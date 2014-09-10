<?php

class ApartadoMateriaNotaController extends Controller {

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
                'actions' => array('create', 'update', 'createstep', 'createstep2', 'viewall', 'view_calificaciones', 'view_calificaciones_materia', 'autocomplete'),
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

    public function actionView_calificaciones($id) {
        if (Yii::app()->user->isAdmin() || (Yii::app()->user->isPreceptor() && Yii::app()->user->isValidCurso($id))) {
            $curso_d = CursoMateria::model()->findAllByAttributes(array('curso' => $id));
            $materias = array();
            foreach ($curso_d as $curso) {
                $materias[] = $curso->materia0;
            }
            $this->render('view_calificaciones', array(
                'materias' => $materias,
                'curso_id' => $id
            ));
        } else {
            $this->render('forbidden', array(
            ));
        }
    }

    public function actionView_calificaciones_materia($id, $curso_id, $periodo = 1) {
       if (Yii::app()->user->isAdmin() || (Yii::app()->user->isPreceptor() && Yii::app()->user->isValidCurso($id))) {
            $alumnos = array();
            $materia = Materia::model()->findByPk($id);
            $curso = Curso::model()->findByPk($curso_id);
            $alumnos_d = $curso->cursoAlumnos;

            foreach ($alumnos_d as $alumno_d) {
                $alumnos[] = $alumno_d->alumno0;
            }
            $this->render('view_calificaciones_materia', array(
                'param1' => $id,
                'param2' => $curso_id,
                'materia' => $materia,
                'alumnos' => $alumnos,
                'curso' => $curso,
                'periodo' => $periodo
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
    public function actionCreate() {

        if (Yii::app()->user->isPreceptor()) {

            $model = new ApartadoMateriaNota;

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if (isset($_POST['ApartadoMateriaNota'])) {
                $model->attributes = $_POST['ApartadoMateriaNota'];
                if ($model->save()) {
                    $this->redirect(array('apartadoMateriaNota/createstep', 'id' => $model->id));
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

            $this->render('create_note', array(
                'model' => $this->loadModel($id),
            ));
        } else {
            $this->render('forbidden', array(
            ));
        }
    }

    public function actionCreatestep2($id, $id_alumno, $id_materia) {
        if (Yii::app()->user->isPreceptor()) {

            if (isset($_POST['ApartadoMateriaNota'])) {
                $model = $this->loadModel($id);
                // $alumno_id = $model->alumno;
				$n_numerica = null;
				if (isset($_POST['ApartadoMateriaNota']['nota_numerica'])){
					$n_numerica = $_POST['ApartadoMateriaNota']['nota_numerica'];
					$n_numerica = str_replace(",",".", $n_numerica);
					$n_numerica *= 1.0;
				}
                $model->attributes = $_POST['ApartadoMateriaNota'];
				if (isset($n_numerica))
				 $model->nota_numerica = $n_numerica;
                if ($model->save()) {
                    $model = new ApartadoMateriaNota('insert');
                    $model->alumno = $id_alumno;
                    $model->periodo = 0;
                    $model->save();
                    $_POST = null;
                    $this->redirect(array('apartadoMateriaNota/createstep2', 'id' => $model->id, 'id_alumno' => $id_alumno, 'id_materia' => $id_materia));
                }
            }

			$model = $this->loadModel($id);
			$alumno = Alumnos::model()->findByPk($model->alumno);
			$curso = Curso::model()->findByPk($alumno->cursoactualid);
			$nivel = Nivel::model()->findByPk($curso->nivelid);
			$materia = Materia::model()->findByPk($id_materia);
			$apartados = ApartadoMateria::model()->findAllByAttributes(array('materia'=>$id_materia));
			if ($curso->nivelid == 2)
				$notas = ApartadoMateriaNota::model()->findAllByAttributes(array('alumno'=>$alumno->idalumno),'nota_conceptual != 0 AND id_apartado_materia != 0');
			if ($curso->nivelid == 3)
				$notas = ApartadoMateriaNota::model()->findAllByAttributes(array('alumno'=>$alumno->idalumno),'nota_numerica != -1 AND id_apartado_materia != 0');
            $this->render('create_note_2', array(
                'model' => $model,
				'id_alumno' => $id_alumno,
				'id_materia' => $id_materia,
				'alumno' => $alumno,
				'curso' => $curso,
				'nivel' => $nivel,
				'materia' => $materia,
				'apartados' => $apartados,
				'notas' => $notas,
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
      if (Yii::app()->user->isAdmin() || (Yii::app()->user->isPreceptor() && Yii::app()->user->isValidCurso($id))) {
            $model = $this->loadModel($id);

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if (isset($_POST['ApartadoMateriaNota'])) {
                $model->attributes = $_POST['ApartadoMateriaNota'];
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
    public function actionDelete($id) {
        if (Yii::app()->user->isAdmin() || (Yii::app()->user->isPreceptor() && Yii::app()->user->isValidCurso($id))) {

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
        $dataProvider = new CActiveDataProvider('ApartadoMateriaNota');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new ApartadoMateriaNota('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['ApartadoMateriaNota']))
            $model->attributes = $_GET['ApartadoMateriaNota'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return ApartadoMateriaNota the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = ApartadoMateriaNota::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param ApartadoMateriaNota $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'apartado-materia-nota-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionAutocomplete() {
        $id_curso_list = array();
        $cursos = Yii::app()->user->getPreceptorCursos();
        foreach ($cursos as $curso) {
            $id_curso_list[] = $curso->cursoid;
        }
        if (isset($_GET['term'])) {

            $criteria = new CDbCriteria;
            $criteria->alias = "alumnos";
            $term = $_GET['term'];
            if (count($id_curso_list) == 1) {   // POR AHORA UN PRECEPTOR SOLO TIENE UN CURSO ASOCIADO POR ESO SE HARDCODEA UNICAMENTE ID_CURSO_LIST[0]- EN OTRO CASO HAY QUE HACER UN ALUMNOS.CURSOACTUALID IN (LIST OF CURSOS)
                $criteria->condition = "(alumnos.nombre like '$term%' OR alumnos.apellido like '$term%' OR alumnos.codigoalumno like '$term%') AND alumnos.cursoactualid = " . $id_curso_list[0];
            } else {
                $criteria->condition = "alumnos.nombre like '$term%' OR alumnos.apellido like '$term%' OR alumnos.codigoalumno like '$term%'";
            }
            $dataProvider = new CActiveDataProvider(get_class(Alumnos::model()), array(
                        'criteria' => $criteria, 'pagination' => false,
                    ));
            $alumnos = $dataProvider->getData();

            $return_array = array();
            foreach ($alumnos as $alumno) {
                $return_array[] = array(
                    'label' => $alumno->fullname,
                    'value' => $alumno->idalumno,
                    'id' => $alumno->idalumno,
                );
            }

            echo CJSON::encode($return_array);
        }
    }

}
