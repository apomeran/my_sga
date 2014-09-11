<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Cursos', 'url'=>array('index')),
	array('label'=>'Administrar Cursos', 'url'=>array('admin')),
);
?>

<h1>Crear Cursos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>