<?php
/* @var $this NivelController */
/* @var $model Nivel */

$this->breadcrumbs=array(
	'Nivels'=>array('index'),
	$model->idnivel=>array('view','id'=>$model->idnivel),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nivel', 'url'=>array('index')),
	array('label'=>'Create Nivel', 'url'=>array('create')),
	array('label'=>'View Nivel', 'url'=>array('view', 'id'=>$model->idnivel)),
	array('label'=>'Manage Nivel', 'url'=>array('admin')),
);
?>

<h1>Update Nivel <?php echo $model->idnivel; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>