<?php
/* @var $this PreceptoresController */
/* @var $model Preceptores */

$this->breadcrumbs=array(
	'Preceptores'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Preceptores', 'url'=>array('index')),
	array('label'=>'Administrar Preceptores', 'url'=>array('admin')),
);
?>

<h1>Crear Preceptor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>