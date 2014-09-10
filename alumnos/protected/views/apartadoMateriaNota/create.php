<?php
/* @var $this NotaMateriaController */
/* @var $model NotaMateria */

$this->breadcrumbs=array(
	'Nota Materias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Ver calificaciones', 'url'=>array('apartadoMateriaNota/viewall')),
);
?>

<h1>Calificar Alumno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>