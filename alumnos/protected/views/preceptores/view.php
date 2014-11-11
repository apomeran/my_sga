<?php
/* @var $this PreceptoresController */
/* @var $model Preceptores */

$this->breadcrumbs=array(
	'Preceptores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Preceptores', 'url'=>array('index')),
	array('label'=>'Crear Preceptores', 'url'=>array('create')),
	array('label'=>'Actualizar Preceptores', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Preceptores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de eliminar este item?')),
	array('label'=>'Administrar Preceptores', 'url'=>array('admin')),
	array('label'=>'Enviar un email al Preceptor', 'url'=>array('user/sendemail&id='. $model->id . '&preceptor=1')),
);
?>

<h1>Ver Preceptor #<?php echo $model->id; ?></h1>

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
