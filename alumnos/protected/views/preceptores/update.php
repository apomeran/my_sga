<?php
/* @var $this PreceptoresController */
/* @var $model Preceptores */

$this->breadcrumbs=array(
	'Preceptores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Preceptores', 'url'=>array('index')),
	array('label'=>'Crear Preceptores', 'url'=>array('create')),
	array('label'=>'Ver Preceptores', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Preceptores', 'url'=>array('admin')),
	array('label'=>'Cambiar contraseña para el Preceptor', 'url'=>array('user/changepwd&id='.$model->id .'&preceptor_search=1')),
	array('label'=>'Enviar un email al Preceptor', 'url'=>array('user/sendemail&id='. $model->id . '&preceptor=1')),
);
?>

<h1>Actualizar Preceptores <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>