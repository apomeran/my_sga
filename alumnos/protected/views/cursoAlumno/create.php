<?php
/* @var $this CursoAlumnoController */
/* @var $model CursoAlumno */

$this->breadcrumbs=array(
	'Curso Alumnos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Inscribir Alumno', 'url'=>array('create')),
);
?>

<h1>Inscripción Ciclo Lectivo <?php echo date("Y"); ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>