<?php
/* @var $this FaltaAlumnoController */
/* @var $model FaltaAlumno */

$this->breadcrumbs=array(
	'Falta Alumnos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Inasistencias', 'url'=>array('')),
	array('label'=>'Administrar Inasistencias', 'url'=>array('')),
);
?>

<h1>Cargar inasistencias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>