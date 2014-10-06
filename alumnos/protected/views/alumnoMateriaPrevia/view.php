<?php
/* @var $this AlumnoMateriaPreviaController */
/* @var $model AlumnoMateriaPrevia */

$this->breadcrumbs=array(
	'Alumno Materia Previas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Previas para alumnos', 'url'=>array('index')),
	array('label'=>'Crear Materia Previa para un Alumno', 'url'=>array('create')),
	array('label'=>'Actualizar Materia Previa para un Alumno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Materia Previa para un Alumno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Ver Previa de Alumno: <?php echo $model->alumno0->fullname; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'alumno0.fullname',
		'materia0.nombre',
		'curso0.nombre',
	),
)); ?>
