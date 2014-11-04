<?php
/* @var $this PadresController */
/* @var $model Padres */

$this->breadcrumbs=array(
	'Padres'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Padres', 'url'=>array('index')),
	array('label'=>'Administrar Padres', 'url'=>array('admin')),
);
?>

<h1>Crear Nuevo Padre</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>