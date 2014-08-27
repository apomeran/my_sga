<?php
/* @var $this TemasMateriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Temas Materias',
);

$this->menu=array(
	array('label'=>'Create TemasMateria', 'url'=>array('create')),
	array('label'=>'Manage TemasMateria', 'url'=>array('admin')),
);
?>

<h1>Temas Materias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
