<?php
/* @var $this ProgramaMateriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Programa Materias',
);

$this->menu=array(
	array('label'=>'Create ProgramaMateria', 'url'=>array('create')),
	array('label'=>'Manage ProgramaMateria', 'url'=>array('admin')),
);
?>

<h1>Programa Materias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
