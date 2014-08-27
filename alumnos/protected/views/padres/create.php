<?php
/* @var $this PadresController */
/* @var $model Padres */

$this->breadcrumbs=array(
	'Padres'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Padres', 'url'=>array('index')),
	array('label'=>'Manage Padres', 'url'=>array('admin')),
);
?>

<h1>Create Padres</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>