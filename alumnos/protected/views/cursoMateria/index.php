<?php
/* @var $this CursoMateriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Curso Materias',
);

$this->menu=array(
	array('label'=>'Asociar Materia a un Curso', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Materias por Curso</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
