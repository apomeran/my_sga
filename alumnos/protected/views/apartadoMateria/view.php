<?php
/* @var $this ApartadoMateriaController */
/* @var $model Apartados por Materia */

$this->breadcrumbs=array(
	'Apartado Materias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Ver Apartados por Materia', 'url'=>array('index')),
	array('label'=>'Create Apartados por Materia', 'url'=>array('create')),
	array('label'=>'Update Apartados por Materia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Apartados por Materia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Apartados por Materia', 'url'=>array('admin')),
);
?>

<h1>Apartados por Materia</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'materia0.nombre',
		'apartado0.titulo',
	),
)); ?>
