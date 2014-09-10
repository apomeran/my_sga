<?php
/* @var $this AlumnoMateriaPreviaController */
/* @var $model AlumnoMateriaPrevia */

$this->breadcrumbs=array(
	'Alumno Materias Previas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Previas', 'url'=>array('index')),
	array('label'=>'Crear Previas', 'url'=>array('create')),
	array('label'=>'Ver Previas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Previas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Alumno - Materias Previas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>