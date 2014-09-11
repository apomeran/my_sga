<?php
/* @var $this ProgramaMateriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Materias por Programa',
);

$this->menu=array(
	array('label'=>'Crear Materias por Programa', 'url'=>array('create')),
	array('label'=>'Administrar Materias por Programa', 'url'=>array('admin')),
);
?>

<h1>Materias por Programa</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
