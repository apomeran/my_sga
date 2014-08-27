<?php
/* @var $this TurnosController */
/* @var $model Turnos */

$this->breadcrumbs=array(
	'Turnoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Turnos', 'url'=>array('index')),
	array('label'=>'Manage Turnos', 'url'=>array('admin')),
);
?>

<h1>Create Turnos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>