<?php
/* @var $this AlumnoMateriaPreviaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alumno Materia Previas',
);

$this->menu=array(
	array('label'=>'Create AlumnoMateriaPrevia', 'url'=>array('create')),
	array('label'=>'Manage AlumnoMateriaPrevia', 'url'=>array('admin')),
);
?>

<h1>Alumno Materia Previas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
