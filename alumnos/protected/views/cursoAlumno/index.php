<?php
/* @var $this CursoAlumnoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Curso Alumnos',
);

$this->menu=array(
	array('label'=>'Listar Inscripciones', 'url'=>array('index')),
	array('label'=>'Inscribir Alumno', 'url'=>array('create')),
);
?>

<h1>Alumnos por Curso</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
