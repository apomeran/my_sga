<?php
/* @var $this PadresController */
/* @var $model Padres */

$this->breadcrumbs=array(
	'Padres'=>array('index'),
	$model->idpadre,
);

$this->menu=array(
	array('label'=>'Listar Padres', 'url'=>array('index')),
	array('label'=>'Crear Padre', 'url'=>array('create')),
	array('label'=>'Actualizar Padres', 'url'=>array('update', 'id'=>$model->idpadre)),
	array('label'=>'Eliminar Padre', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpadre),'confirm'=>'Estas seguro de eliminar este item?')),
	array('label'=>'Administracion de Padres', 'url'=>array('admin')),
);
?>

<h1>Adulto Responsable - <?php echo $model->fullname; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'usuario0.username',
		'nombre',
		'apellido',
		'observaciones',
		'dni',
		'mail',
		'telefono_fijo',
		'telefono_celular',
		
	),
)); ?>
