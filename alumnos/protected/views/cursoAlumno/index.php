<?php
/* @var $this CursoAlumnoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Curso Alumnos',
);

$this->menu=array(
	array('label'=>'Create CursoAlumno', 'url'=>array('create')),
	array('label'=>'Manage CursoAlumno', 'url'=>array('admin')),
);
?>

<h1>Curso Alumnos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
