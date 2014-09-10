<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Alumnos', 'url'=>array('index')),
	array('label'=>'Administrar Alumnos', 'url'=>array('admin')),
);
?>

<h1>Crear Alumnos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>