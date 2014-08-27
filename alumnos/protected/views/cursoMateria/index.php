<?php
/* @var $this CursoMateriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Curso Materias',
);

$this->menu=array(
	array('label'=>'Create CursoMateria', 'url'=>array('create')),
	array('label'=>'Manage CursoMateria', 'url'=>array('admin')),
);
?>

<h1>Curso Materias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
