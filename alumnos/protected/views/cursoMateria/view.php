<?php
/* @var $this CursoMateriaController */
/* @var $model CursoMateria */

$this->breadcrumbs=array(
	'Curso Materias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CursoMateria', 'url'=>array('index')),
	array('label'=>'Create CursoMateria', 'url'=>array('create')),
	array('label'=>'Update CursoMateria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CursoMateria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CursoMateria', 'url'=>array('admin')),
);
?>

<h1>View CursoMateria #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'curso0.nombre',
		'materia0.nombre',
		'profesor0.nombre',
	),
)); ?>
