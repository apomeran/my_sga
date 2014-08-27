<?php
/* @var $this TemasMateriaController */
/* @var $model TemasMateria */

$this->breadcrumbs=array(
	'Temas Materias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TemasMateria', 'url'=>array('index')),
	array('label'=>'Manage TemasMateria', 'url'=>array('admin')),
);
?>

<h1>Create TemasMateria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>