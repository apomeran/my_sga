<?php
/* @var $this AlumnoMateriaPreviaController */
/* @var $model AlumnoMateriaPrevia */

$this->breadcrumbs=array(
	'Alumno Materia Previas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AlumnoMateriaPrevia', 'url'=>array('index')),
	array('label'=>'Create AlumnoMateriaPrevia', 'url'=>array('create')),
	array('label'=>'View AlumnoMateriaPrevia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AlumnoMateriaPrevia', 'url'=>array('admin')),
);
?>

<h1>Update AlumnoMateriaPrevia <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>