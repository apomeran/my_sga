<?php
/* @var $this CursoAlumnoController */
/* @var $model CursoAlumno */

$this->breadcrumbs=array(
	'Curso Alumnos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Inscripciones', 'url'=>array('index')),
	array('label'=>'Inscribir Alumno', 'url'=>array('create')),
);
?>

<h1>Inscripción</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>