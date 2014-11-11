<?php
/* @var $this UserController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Volver', 'url'=>array('index')),
	
);
?>

<h3>Mail enviado exitosamente a <?php echo $model->username; ?></h3>


