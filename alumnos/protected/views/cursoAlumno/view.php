<?php
/* @var $this CursoAlumnoController */
/* @var $model CursoAlumno */

$this->breadcrumbs=array(
	'Curso Alumnos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Volver', 'url'=>array('admin')),
	
);
?>

<h1>Inscripcion </h1>

El Alumno <b><?php echo $model->alumno0->fullname; ?> 
</b> fue correctamente inscripto en el curso: <br> <br> 
- <b><i><?php echo $model->curso0->nombre; ?></i></b>
