<?php
/* @var $this DocentesController */
/* @var $model Docentes */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Docentes', 'url'=>array('index')),
	array('label'=>'Crear Docentes', 'url'=>array('create')),
	array('label'=>'Ver Docentes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Docentes', 'url'=>array('admin')),
);
?>

<h1>Actualizar Docente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>