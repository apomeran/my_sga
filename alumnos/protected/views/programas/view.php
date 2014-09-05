<?php
/* @var $this ProgramasController */
/* @var $model Programas */

$this->breadcrumbs=array(
	'Programases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Programas', 'url'=>array('index')),
	array('label'=>'Create Programas', 'url'=>array('create')),
	array('label'=>'Update Programas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Programas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Programas', 'url'=>array('admin')),
);
?>

<h1>View Programas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'titulo',
	),
)); ?>
