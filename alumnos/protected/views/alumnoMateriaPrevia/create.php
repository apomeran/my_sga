<?php
/* @var $this AlumnoMateriaPreviaController */
/* @var $model AlumnoMateriaPrevia */

$this->breadcrumbs=array(
	'Alumno Materia Previas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'-', 'url'=>"#"),
);
?>

<h1>Cargar una Materia Previa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>