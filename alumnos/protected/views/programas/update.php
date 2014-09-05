<?php
/* @var $this ProgramasController */
/* @var $model Programas */

$this->breadcrumbs=array(
	'Programases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Programas', 'url'=>array('index')),
	array('label'=>'Create Programas', 'url'=>array('create')),
	array('label'=>'View Programas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Programas', 'url'=>array('admin')),
);
?>

<h1>Update Programas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>