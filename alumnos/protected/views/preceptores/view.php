<?php
/* @var $this PreceptoresController */
/* @var $model Preceptores */

$this->breadcrumbs=array(
	'Preceptores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Preceptores', 'url'=>array('index')),
	array('label'=>'Create Preceptores', 'url'=>array('create')),
	array('label'=>'Update Preceptores', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Preceptores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Preceptores', 'url'=>array('admin')),
);
?>

<h1>View Preceptores #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'curso0.nombre',
		'usuario0.username',
	),
)); ?>

<br>
<br>
<h3>Ver cursos a cargo</h3>

<?php 
		echo '<li>' . $model->curso0->nombre . '</li>';
