<?php
/* @var $this DocentesController */
/* @var $model Docentes */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Docentes', 'url'=>array('index')),
	array('label'=>'Crear Docentes', 'url'=>array('create')),
	array('label'=>'Actualizar Docentes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Docentes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro que deseas eliminar este item?')),
	array('label'=>'Administrar Docentes', 'url'=>array('admin')),
);
?>

<h1>Ver Docente #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
		'apellido',
		'dni',
		'notas',
	),
)); ?>
