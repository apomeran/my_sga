<?php
/* @var $this CursoMateriaController */
/* @var $model CursoMateria */

$this->breadcrumbs=array(
	'Curso Materias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar CursoMateria', 'url'=>array('index')),
	array('label'=>'Administrar CursoMateria', 'url'=>array('admin')),
);
?>

<h1>Crear CursoMateria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>