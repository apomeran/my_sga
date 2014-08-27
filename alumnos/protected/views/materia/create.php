<?php
/* @var $this MateriaController */
/* @var $model Materia */

$this->breadcrumbs=array(
	'Materias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Materia', 'url'=>array('index')),
	array('label'=>'Manage Materia', 'url'=>array('admin')),
);
?>

<h1>Create Materia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>