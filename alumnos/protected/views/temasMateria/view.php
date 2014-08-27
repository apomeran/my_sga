<?php
/* @var $this TemasMateriaController */
/* @var $model TemasMateria */

$this->breadcrumbs=array(
	'Temas Materias'=>array('index'),
	$model->idtemas_materiaid,
);

$this->menu=array(
	array('label'=>'List TemasMateria', 'url'=>array('index')),
	array('label'=>'Create TemasMateria', 'url'=>array('create')),
	array('label'=>'Update TemasMateria', 'url'=>array('update', 'id'=>$model->idtemas_materiaid)),
	array('label'=>'Delete TemasMateria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtemas_materiaid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TemasMateria', 'url'=>array('admin')),
);
?>

<h1>View TemasMateria #<?php echo $model->idtemas_materiaid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtemas_materiaid',
		'materiaid',
		'nombre',
	),
)); ?>
