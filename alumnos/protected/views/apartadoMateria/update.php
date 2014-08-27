<?php
/* @var $this ApartadoMateriaController */
/* @var $model ApartadoMateria */

$this->breadcrumbs=array(
	'Apartado Materias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ApartadoMateria', 'url'=>array('index')),
	array('label'=>'Create ApartadoMateria', 'url'=>array('create')),
	array('label'=>'View ApartadoMateria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ApartadoMateria', 'url'=>array('admin')),
);
?>

<h1>Update ApartadoMateria <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>