<?php
/* @var $this PreceptoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Preceptores',
);

$this->menu=array(
	array('label'=>'Crear Preceptores', 'url'=>array('create')),
	array('label'=>'Administrar Preceptores', 'url'=>array('admin')),
);
?>

<h1>Preceptores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
