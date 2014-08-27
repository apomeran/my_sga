<?php
/* @var $this PreceptoresController */
/* @var $model Preceptores */

$this->breadcrumbs=array(
	'Preceptores'=>array('index'),
	$model->idpreceptor,
);

$this->menu=array(
	array('label'=>'List Preceptores', 'url'=>array('index')),
	array('label'=>'Create Preceptores', 'url'=>array('create')),
	array('label'=>'Update Preceptores', 'url'=>array('update', 'id'=>$model->idpreceptor)),
	array('label'=>'Delete Preceptores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpreceptor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Preceptores', 'url'=>array('admin')),
);
?>

<h1>View Preceptores #<?php echo $model->idpreceptor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpreceptor',
		'nombre',
		'apellido',
	),
)); ?>
