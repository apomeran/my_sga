<?php
/* @var $this ProgramasController */
/* @var $model Programas */

$this->breadcrumbs=array(
	'Programases'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'List Programas', 'url'=>array('index')),
	array('label'=>'Manage Programas', 'url'=>array('admin')),
);
?>

<h1>Crear Programa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>