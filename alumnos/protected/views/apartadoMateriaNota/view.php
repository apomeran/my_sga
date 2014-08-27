<?php
/* @var $this ApartadoMateriaNotaController */
/* @var $model ApartadoMateriaNota */

$this->breadcrumbs=array(
	'Apartado Materia Notas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ApartadoMateriaNota', 'url'=>array('index')),
	array('label'=>'Create ApartadoMateriaNota', 'url'=>array('create')),
	array('label'=>'Update ApartadoMateriaNota', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ApartadoMateriaNota', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ApartadoMateriaNota', 'url'=>array('admin')),
);
?>

<h1>View ApartadoMateriaNota #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_apartado_materia',
		'nota_conceptual',
		'periodo',
		'observaciones',
	),
)); ?>
