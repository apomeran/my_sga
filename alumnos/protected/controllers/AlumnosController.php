<?php

class AlumnosController extends Controller {

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
                'actions' => array('index', 'view', 'legajo', 'verMateria'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'admin'),
                'users' => array('admin'),
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

    public function actionverMateria($id_alumno, $id_materia) {
        if (Yii::app()->user->isValidSon($id_alumno)) {
            $alumno = Alumnos::model()->findByPk($id_alumno);
            $materia = Materia::model()->findByPk($id_materia);
            $apartados = ApartadoMateria::model()->findAllByAttributes(array('materia' => $id_materia));
            $notas = ApartadoMateriaNota::model()->findAllByAttributes(array('alumno' => $id_alumno), 'nota_conceptual != 0 AND id_apartado_materia != 0');
            $this->render('vermateria', array(
                'materia' => $materia,
                'alumno' => $alumno,
                'apartados' => $apartados,
                'notas' => $notas,
            ));
        } else {
            $this->render('forbidden', array(
            ));
        }
    }

    public function actionLegajo($id) {

        if (Yii::app()->user->isValidSon($id)) {
            $previas = alumnoMateriaPrevia::model()->findAllByAttributes(array('alumno' => $id));
            $alumno = Alumnos::model()->findByPk($id);
            $inasistencias = FaltaAlumno::model()->findAllByAttributes(array('alumno' => $id), "curso = " . $alumno->cursoactualid . " AND valor != 0) ORDER BY (date_inasistencia");
            $materias = CursoMateria::model()->findAllByAttributes(array('curso' => $alumno->cursoactualid));

            $this->render('legajo', array(
                'model' => $this->loadModel($id),
                'previas' => $previas,
                'inasistencias' => $inasistencias,
                'materias' => $materias,
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
        if (Yii::app()->user->isValidSon($id)) {
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
        $model = new Alumnos;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Alumnos'])) {
            $model->attributes = $_POST['Alumnos'];
            if ($model->save()) {
                $cursoEntry = new CursoAlumno('insert');
                $cursoEntry->setAttribute('curso', $model->cursoactualid);
                $cursoEntry->setAttribute('alumno', $model->idalumno);
                $cursoEntry->save();
                $this->redirect(array('view', 'id' => $model->idalumno));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Alumnos'])) {
            $model->attributes = $_POST['Alumnos'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idalumno));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Alumnos');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Alumnos('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Alumnos']))
            $model->attributes = $_GET['Alumnos'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Alumnos the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Alumnos::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Alumnos $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'alumnos-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
