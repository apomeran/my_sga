<?php
/* @var $this CursoAlumnoController */
/* @var $model CursoAlumno */

$this->breadcrumbs=array(
	'Curso Alumnos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CursoAlumno', 'url'=>array('index')),
	array('label'=>'Create CursoAlumno', 'url'=>array('create')),
	array('label'=>'View CursoAlumno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CursoAlumno', 'url'=>array('admin')),
);
?>

<h1>Update CursoAlumno <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>