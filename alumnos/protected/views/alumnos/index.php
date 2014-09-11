<?php
/* @var $this AlumnosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alumnos',
);

$this->menu=array(
	array('label'=>'Crear Alumnos', 'url'=>array('create')),
	array('label'=>'Administrar Alumnos', 'url'=>array('admin')),
);
?>

<h1>Listado de Alumnos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
