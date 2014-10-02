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
);
?>

<h1>Actualizar Preceptores <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>