<?php
/* @var $this NotasConceptualesController */
/* @var $model NotasConceptuales */

$this->breadcrumbs=array(
	'Notas Conceptuales'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List NotasConceptuales', 'url'=>array('index')),
	array('label'=>'Create NotasConceptuales', 'url'=>array('create')),
	array('label'=>'Update NotasConceptuales', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete NotasConceptuales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NotasConceptuales', 'url'=>array('admin')),
);
?>

<h1>View NotasConceptuales #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'valor',
		'codigo',
	),
)); ?>
