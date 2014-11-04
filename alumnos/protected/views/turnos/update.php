<?php
/* @var $this TurnosController */
/* @var $model Turnos */

$this->breadcrumbs=array(
	'Turnos'=>array('index'),
	$model->idturno=>array('view','id'=>$model->idturno),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Turnos', 'url'=>array('index')),
	array('label'=>'Crear Turnos', 'url'=>array('create')),
	array('label'=>'Ver Turnos', 'url'=>array('view', 'id'=>$model->idturno)),
	array('label'=>'Administrar Turnos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Turno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>