<?php
/* @var $this ApartadoMateriaController */
/* @var $model ApartadoMateria */

$this->breadcrumbs=array(
	'Apartado Materias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ApartadoMateria', 'url'=>array('index')),
	array('label'=>'Manage ApartadoMateria', 'url'=>array('admin')),
);
?>

<h1>Create ApartadoMateria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>