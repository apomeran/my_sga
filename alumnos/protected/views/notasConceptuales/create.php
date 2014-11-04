<?php
/* @var $this NotasConceptualesController */
/* @var $model NotasConceptuales */

$this->breadcrumbs=array(
	'Notas Conceptuales'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Notas Conceptuales', 'url'=>array('index')),
	array('label'=>'Administrar Notas Conceptuales', 'url'=>array('admin')),
);
?>

<h1>Crear Notas Conceptuales</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>