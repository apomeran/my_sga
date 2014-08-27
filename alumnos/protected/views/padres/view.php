<?php
/* @var $this PadresController */
/* @var $model Padres */

$this->breadcrumbs=array(
	'Padres'=>array('index'),
	$model->idpadre,
);

$this->menu=array(
	array('label'=>'List Padres', 'url'=>array('index')),
	array('label'=>'Create Padres', 'url'=>array('create')),
	array('label'=>'Update Padres', 'url'=>array('update', 'id'=>$model->idpadre)),
	array('label'=>'Delete Padres', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpadre),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Padres', 'url'=>array('admin')),
);
?>

<h1>View Padres #<?php echo $model->idpadre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpadre',
		'nombre',
		'apellido',
		'observaciones',
		'dni',
		'mail',
		'telefono_fijo',
		'telefono_celular',
	),
)); ?>
