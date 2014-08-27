<?php
/* @var $this TurnosController */
/* @var $model Turnos */

$this->breadcrumbs=array(
	'Turnoses'=>array('index'),
	$model->idturno=>array('view','id'=>$model->idturno),
	'Update',
);

$this->menu=array(
	array('label'=>'List Turnos', 'url'=>array('index')),
	array('label'=>'Create Turnos', 'url'=>array('create')),
	array('label'=>'View Turnos', 'url'=>array('view', 'id'=>$model->idturno)),
	array('label'=>'Manage Turnos', 'url'=>array('admin')),
);
?>

<h1>Update Turnos <?php echo $model->idturno; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>