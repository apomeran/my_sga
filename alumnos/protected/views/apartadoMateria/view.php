<?php
/* @var $this ApartadoMateriaController */
/* @var $model Apartados por Materia */

$this->breadcrumbs=array(
	'Apartado Materias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Crear Apartados por Materia', 'url'=>array('create')),
	array('label'=>'Actualizar este apartado', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar este apartado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de eliminar esto?')),
	array('label'=>'Ver Todos', 'url'=>array('admin')),
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
