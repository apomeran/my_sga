<?php
/* @var $this ApartadoMateriaNotaController */
/* @var $model ApartadoMateriaNota */

$this->breadcrumbs=array(
	'Apartado Materia Notas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar ApartadoMateriaNota', 'url'=>array('index')),
	array('label'=>'Crear ApartadoMateriaNota', 'url'=>array('create')),
	array('label'=>'Ver ApartadoMateriaNota', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar ApartadoMateriaNota', 'url'=>array('admin')),
);
?>

<h1>Actualizar ApartadoMateriaNota </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>