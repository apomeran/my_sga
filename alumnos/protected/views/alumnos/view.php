<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */

$this->breadcrumbs=array(
	'Alumnoses'=>array('index'),
	$model->idalumno,
);

$this->menu=array(
	array('label'=>'Listado Alumnos', 'url'=>array('index')),
	array('label'=>'Crear Alumnos', 'url'=>array('create')),
	array('label'=>'Actualizar Alumnos', 'url'=>array('update', 'id'=>$model->idalumno)),
	array('label'=>'Eliminar Alumnos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idalumno),'confirm'=>'Estas seguro de eliminar este alumno?')),
	array('label'=>'Administracion de Alumnos', 'url'=>array('admin')),
);
?>

<h1>Alumno <?php echo $model->fullname; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fullname',
		'dni',
		'cursoactual.nombre',
		'codigoalumno',
		'padre.fullname',
		'madre.fullname',
	),
)); ?>
