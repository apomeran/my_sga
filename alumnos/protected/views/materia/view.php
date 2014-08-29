<?php
/* @var $this MateriaController */
/* @var $model Materia */

$this->breadcrumbs=array(
	'Materias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listado Materia', 'url'=>array('index')),
	array('label'=>'Crear Materia', 'url'=>array('create')),
	array('label'=>'Actualizar Materia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Materia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Materia', 'url'=>array('admin')),
);
?>

<h1>Ver Materia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
		'descripcion',
		'nivel.nombre',
		'ano_grado',
	),
)); ?>
