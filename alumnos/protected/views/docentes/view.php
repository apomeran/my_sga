<?php
/* @var $this DocentesController */
/* @var $model Docentes */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Docentes', 'url'=>array('index')),
	array('label'=>'Create Docentes', 'url'=>array('create')),
	array('label'=>'Update Docentes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Docentes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Docentes', 'url'=>array('admin')),
);
?>

<h1>View Docentes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apellido',
		'dni',
		'notas',
	),
)); ?>
