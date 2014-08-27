<?php
/* @var $this FaltaAlumnoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Falta Alumnos',
);

$this->menu=array(
	array('label'=>'Create FaltaAlumno', 'url'=>array('create')),
	array('label'=>'Manage FaltaAlumno', 'url'=>array('admin')),
);
?>

<h1>Falta Alumnos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
