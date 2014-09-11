<?php
/* @var $this ProgramasController */
/* @var $model Programas */

$this->breadcrumbs=array(
	'Programas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Programas', 'url'=>array('index')),
	array('label'=>'Crear Programas', 'url'=>array('create')),
	array('label'=>'Actualizar Programas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Programas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de querer eliminar este item?')),
	array('label'=>'Administrar Programas', 'url'=>array('admin')),
);
?>

<h1>Ver Programa #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'titulo',
	),
)); ?>
