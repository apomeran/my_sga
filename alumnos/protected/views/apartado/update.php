<?php
/* @var $this ApartadoController */
/* @var $model Apartado */

$this->breadcrumbs=array(
	'Apartados'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Apartado', 'url'=>array('index')),
	array('label'=>'Create Apartado', 'url'=>array('create')),
	array('label'=>'View Apartado', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Apartado', 'url'=>array('admin')),
);
?>

<h1>Update Apartado <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>