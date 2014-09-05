<?php
/* @var $this ProgramaMateriaController */
/* @var $model ProgramaMateria */

$this->breadcrumbs=array(
	'Programa Materias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProgramaMateria', 'url'=>array('index')),
	array('label'=>'Manage ProgramaMateria', 'url'=>array('admin')),
);
?>

<h1>Create ProgramaMateria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>