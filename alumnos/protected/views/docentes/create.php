<?php
/* @var $this DocentesController */
/* @var $model Docentes */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Docentes', 'url'=>array('index')),
	array('label'=>'Manage Docentes', 'url'=>array('admin')),
);
?>

<h1>Create Docentes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>