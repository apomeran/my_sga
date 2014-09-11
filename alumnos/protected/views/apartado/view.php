<?php
/* @var $this ApartadoController */
/* @var $model Apartado */

$this->breadcrumbs=array(
	'Apartados'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Apartados', 'url'=>array('index')),
	array('label'=>'Crear Apartado', 'url'=>array('create')),
	array('label'=>'Actualizar Apartado', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Apartado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro que queres eliminar este item?')),
	array('label'=>'Administrar Apartados', 'url'=>array('admin')),
);
?>

<h1>Ver Apartado #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'titulo',
	),
)); ?>
