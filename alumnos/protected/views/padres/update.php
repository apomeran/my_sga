<?php
/* @var $this PadresController */
/* @var $model Padres */

$this->breadcrumbs=array(
	'Padres'=>array('index'),
	$model->idpadre=>array('view','id'=>$model->idpadre),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Todos los Padres', 'url'=>array('index')),
	array('label'=>'Cambiar contraseña', 'url'=>array('user/changepwd&id='.$model->idpadre .'&padre_search=1')),
);
?>

<h1>Actualizar Padre <?php echo $model->idpadre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>