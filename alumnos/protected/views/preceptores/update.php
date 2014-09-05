<?php
/* @var $this PreceptoresController */
/* @var $model Preceptores */

$this->breadcrumbs=array(
	'Preceptores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Preceptores', 'url'=>array('index')),
	array('label'=>'Create Preceptores', 'url'=>array('create')),
	array('label'=>'View Preceptores', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Preceptores', 'url'=>array('admin')),
);
?>

<h1>Update Preceptores <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>