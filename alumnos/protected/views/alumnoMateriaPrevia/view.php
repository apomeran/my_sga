<?php
/* @var $this AlumnoMateriaPreviaController */
/* @var $model AlumnoMateriaPrevia */

$this->breadcrumbs=array(
	'Alumno Materia Previas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AlumnoMateriaPrevia', 'url'=>array('index')),
	array('label'=>'Create AlumnoMateriaPrevia', 'url'=>array('create')),
	array('label'=>'Update AlumnoMateriaPrevia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AlumnoMateriaPrevia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AlumnoMateriaPrevia', 'url'=>array('admin')),
);
?>

<h1>View AlumnoMateriaPrevia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'alumno',
		'materia',
		'curso',
	),
)); ?>
