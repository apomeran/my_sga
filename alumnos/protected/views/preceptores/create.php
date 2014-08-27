<?php
/* @var $this PreceptoresController */
/* @var $model Preceptores */

$this->breadcrumbs=array(
	'Preceptores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Preceptores', 'url'=>array('index')),
	array('label'=>'Manage Preceptores', 'url'=>array('admin')),
);
?>

<h1>Create Preceptores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>