<?php
/* @var $this ApartadoController */
/* @var $model Apartado */

$this->breadcrumbs=array(
	'Apartados'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Apartado', 'url'=>array('index')),
	array('label'=>'Create Apartado', 'url'=>array('create')),
	array('label'=>'Update Apartado', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Apartado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Apartado', 'url'=>array('admin')),
);
?>

<h1>View Apartado #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'titulo',
	),
)); ?>
