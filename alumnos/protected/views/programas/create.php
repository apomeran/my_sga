<?php
/* @var $this ProgramasController */
/* @var $model Programas */

$this->breadcrumbs=array(
	'Programases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Programas', 'url'=>array('index')),
	array('label'=>'Manage Programas', 'url'=>array('admin')),
);
?>

<h1>Create Programas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>