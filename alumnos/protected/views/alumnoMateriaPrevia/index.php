<?php
/* @var $this AlumnoMateriaPreviaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alumno Materia Previas',
);

$this->menu=array(
	array('label'=>'Crear Previas', 'url'=>array('create')),
	array('label'=>'Administrar Previas', 'url'=>array('admin')),
);
?>

<h1>Alumno - Materias Previas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
