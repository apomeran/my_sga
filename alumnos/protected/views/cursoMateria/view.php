<?php
/* @var $this CursoMateriaController */
/* @var $model CursoMateria */

$this->breadcrumbs=array(
	'Curso Materias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Asociaciones', 'url'=>array('index')),
	array('label'=>'Crear Asociacion', 'url'=>array('create')),
	array('label'=>'Actualizar Asociacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Asociacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de eliminar este item?')),
	array('label'=>'Administrar Asociaciones', 'url'=>array('admin')),
);
?>

<h1>Ver Asociacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'curso0.nombre',
		'materia0.nombre',
		'profesor0.nombre',
	),
)); ?>
