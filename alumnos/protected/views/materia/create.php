<?php
/* @var $this MateriaController */
/* @var $model Materia */

$this->breadcrumbs=array(
	'Materias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Materias', 'url'=>array('index')),
	array('label'=>'Administrar Materias', 'url'=>array('admin')),
);
?>

<h1>Crear Materia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>