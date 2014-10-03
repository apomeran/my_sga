<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */

$this->breadcrumbs=array(
	'Alumnoses'=>array('index'),
	$model->idalumno=>array('view','id'=>$model->idalumno),
	'Update',
);

$this->menu=array(
	array('label'=>'Ver Alumnos', 'url'=>array('index')),
);
?>

<h1>Actualizar Alumno <?php echo $model->fullname; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>