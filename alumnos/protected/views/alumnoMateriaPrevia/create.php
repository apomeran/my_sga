<?php
/* @var $this AlumnoMateriaPreviaController */
/* @var $model AlumnoMateriaPrevia */

$this->breadcrumbs=array(
	'Alumno Materia Previas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AlumnoMateriaPrevia', 'url'=>array('index')),
	array('label'=>'Manage AlumnoMateriaPrevia', 'url'=>array('admin')),
);
?>

<h1>Create AlumnoMateriaPrevia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>