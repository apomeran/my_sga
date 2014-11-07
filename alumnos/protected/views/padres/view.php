<?php
/* @var $this PadresController */
/* @var $model Padres */

$this->breadcrumbs=array(
	'Padres'=>array('index'),
	$model->idpadre,
);

if (Yii::app()->user->isExclusivePreceptor()){
	$this->menu=array(
		array('label'=>'Actualizar Informacion del Padre', 'url'=>array('update', 'id'=>$model->idpadre)),
		array('label'=>'Cambiar contraseña', 'url'=>array('user/changepwd&id='.$model->idpadre .'&padre_search=1')),
		array('label'=>'Enviar un email al Padre', 'url'=>array('user/sendemail&id='. $model->idpadre . '&padre=1', 'id'=>$model->idpadre)),
	);
}
if (Yii::app()->user->isAdmin()){
	$this->menu=array(
		array('label'=>'Listar Padres', 'url'=>array('index')),
		array('label'=>'Crear Padre', 'url'=>array('create')),
		array('label'=>'Actualizar Informacion del Padre', 'url'=>array('update', 'id'=>$model->idpadre)),
		array('label'=>'Eliminar Padre', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpadre),'confirm'=>'Estas seguro de eliminar este item?')),
		array('label'=>'Administracion de Padres', 'url'=>array('admin')),
		array('label'=>'Enviar un email al Padre', 'url'=>array('update', 'id'=>$model->idpadre)),
	);
}

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
