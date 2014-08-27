<?php
/* @var $this CursoAlumnoController */
/* @var $model CursoAlumno */

$this->breadcrumbs=array(
	'Curso Alumnos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CursoAlumno', 'url'=>array('index')),
	array('label'=>'Create CursoAlumno', 'url'=>array('create')),
	array('label'=>'Update CursoAlumno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CursoAlumno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CursoAlumno', 'url'=>array('admin')),
);
?>

<h1>View CursoAlumno #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'curso',
		'alumno',
	),
)); ?>
