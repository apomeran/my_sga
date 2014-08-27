<?php
/* @var $this NotasConceptualesController */
/* @var $model NotasConceptuales */

$this->breadcrumbs=array(
	'Notas Conceptuales'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NotasConceptuales', 'url'=>array('index')),
	array('label'=>'Create NotasConceptuales', 'url'=>array('create')),
	array('label'=>'View NotasConceptuales', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NotasConceptuales', 'url'=>array('admin')),
);
?>

<h1>Update NotasConceptuales <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>