<?php
/* @var $this ApartadoController */
/* @var $model Apartado */

$this->breadcrumbs=array(
	'Apartados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Apartado', 'url'=>array('index')),
	array('label'=>'Manage Apartado', 'url'=>array('admin')),
);
?>

<h1>Create Apartado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>