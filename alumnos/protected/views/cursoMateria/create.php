<?php
/* @var $this CursoMateriaController */
/* @var $model CursoMateria */

$this->breadcrumbs=array(
	'Curso Materias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CursoMateria', 'url'=>array('index')),
	array('label'=>'Manage CursoMateria', 'url'=>array('admin')),
);
?>

<h1>Create CursoMateria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>