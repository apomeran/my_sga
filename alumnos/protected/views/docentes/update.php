<?php
/* @var $this DocentesController */
/* @var $model Docentes */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Docentes', 'url'=>array('index')),
	array('label'=>'Create Docentes', 'url'=>array('create')),
	array('label'=>'View Docentes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Docentes', 'url'=>array('admin')),
);
?>

<h1>Update Docentes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>