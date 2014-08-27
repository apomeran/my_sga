<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */

$this->breadcrumbs=array(
	'Alumnoses'=>array('index'),
	$model->idalumno,
);

$this->menu=array(
	array('label'=>'List Alumnos', 'url'=>array('index')),
	array('label'=>'Create Alumnos', 'url'=>array('create')),
	array('label'=>'Update Alumnos', 'url'=>array('update', 'id'=>$model->idalumno)),
	array('label'=>'Delete Alumnos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idalumno),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alumnos', 'url'=>array('admin')),
);
?>

<h1>View Alumnos #<?php echo $model->idalumno; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fullname',
		'dni',
		'cursoactualid',
		'codigoalumno',
		'padre.fullname',
		'madre.fullname',
	),
)); ?>
