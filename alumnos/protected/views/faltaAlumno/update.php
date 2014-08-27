<?php
/* @var $this FaltaAlumnoController */
/* @var $model FaltaAlumno */

$this->breadcrumbs=array(
	'Falta Alumnos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FaltaAlumno', 'url'=>array('index')),
	array('label'=>'Create FaltaAlumno', 'url'=>array('create')),
	array('label'=>'View FaltaAlumno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FaltaAlumno', 'url'=>array('admin')),
);
?>

<h1>Update FaltaAlumno <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>