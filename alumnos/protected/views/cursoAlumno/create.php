<?php
/* @var $this CursoAlumnoController */
/* @var $model CursoAlumno */

$this->breadcrumbs=array(
	'Curso Alumnos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CursoAlumno', 'url'=>array('index')),
	array('label'=>'Manage CursoAlumno', 'url'=>array('admin')),
);
?>

<h1>Create CursoAlumno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>