<?php
/* @var $this ApartadoMateriaController */
/* @var $model ApartadoMateria */

$this->breadcrumbs=array(
	'Apartado Materias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ApartadoMateria', 'url'=>array('index')),
	array('label'=>'Create ApartadoMateria', 'url'=>array('create')),
	array('label'=>'Update ApartadoMateria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ApartadoMateria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ApartadoMateria', 'url'=>array('admin')),
);
?>

<h1>View ApartadoMateria #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'materia',
		'apartado',
	),
)); ?>
