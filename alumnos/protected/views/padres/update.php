<?php
/* @var $this PadresController */
/* @var $model Padres */

$this->breadcrumbs=array(
	'Padres'=>array('index'),
	$model->idpadre=>array('view','id'=>$model->idpadre),
	'Update',
);

$this->menu=array(
	array('label'=>'List Padres', 'url'=>array('index')),
	array('label'=>'Create Padres', 'url'=>array('create')),
	array('label'=>'View Padres', 'url'=>array('view', 'id'=>$model->idpadre)),
	array('label'=>'Manage Padres', 'url'=>array('admin')),
);
?>

<h1>Update Padres <?php echo $model->idpadre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>