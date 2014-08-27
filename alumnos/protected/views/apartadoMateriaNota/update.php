<?php
/* @var $this ApartadoMateriaNotaController */
/* @var $model ApartadoMateriaNota */

$this->breadcrumbs=array(
	'Apartado Materia Notas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ApartadoMateriaNota', 'url'=>array('index')),
	array('label'=>'Create ApartadoMateriaNota', 'url'=>array('create')),
	array('label'=>'View ApartadoMateriaNota', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ApartadoMateriaNota', 'url'=>array('admin')),
);
?>

<h1>Update ApartadoMateriaNota <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>