<?php
/* @var $this DocentesController */
/* @var $model Docentes */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Docentes', 'url'=>array('index')),
	array('label'=>'Administrar Docentes', 'url'=>array('admin')),
);
?>

<h1>Crear Docentes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>