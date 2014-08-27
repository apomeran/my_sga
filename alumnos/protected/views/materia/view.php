<?php
/* @var $this MateriaController */
/* @var $model Materia */

$this->breadcrumbs=array(
	'Materias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Materia', 'url'=>array('index')),
	array('label'=>'Create Materia', 'url'=>array('create')),
	array('label'=>'Update Materia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Materia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Materia', 'url'=>array('admin')),
);
?>

<h1>View Materia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
		'nivelid',
		'ano_grado',
	),
)); ?>
