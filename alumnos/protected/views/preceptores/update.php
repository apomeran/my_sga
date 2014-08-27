<?php
/* @var $this PreceptoresController */
/* @var $model Preceptores */

$this->breadcrumbs=array(
	'Preceptores'=>array('index'),
	$model->idpreceptor=>array('view','id'=>$model->idpreceptor),
	'Update',
);

$this->menu=array(
	array('label'=>'List Preceptores', 'url'=>array('index')),
	array('label'=>'Create Preceptores', 'url'=>array('create')),
	array('label'=>'View Preceptores', 'url'=>array('view', 'id'=>$model->idpreceptor)),
	array('label'=>'Manage Preceptores', 'url'=>array('admin')),
);
?>

<h1>Update Preceptores <?php echo $model->idpreceptor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>