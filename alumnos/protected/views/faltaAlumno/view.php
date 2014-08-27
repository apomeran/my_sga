<?php
/* @var $this FaltaAlumnoController */
/* @var $model FaltaAlumno */

$this->breadcrumbs=array(
	'Falta Alumnos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FaltaAlumno', 'url'=>array('index')),
	array('label'=>'Create FaltaAlumno', 'url'=>array('create')),
	array('label'=>'Update FaltaAlumno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FaltaAlumno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FaltaAlumno', 'url'=>array('admin')),
);
?>

<h1>View FaltaAlumno #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'alumno',
		'valor',
		'curso',
	),
)); ?>
