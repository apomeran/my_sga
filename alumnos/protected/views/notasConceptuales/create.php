<?php
/* @var $this NotasConceptualesController */
/* @var $model NotasConceptuales */

$this->breadcrumbs=array(
	'Notas Conceptuales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NotasConceptuales', 'url'=>array('index')),
	array('label'=>'Manage NotasConceptuales', 'url'=>array('admin')),
);
?>

<h1>Create NotasConceptuales</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>