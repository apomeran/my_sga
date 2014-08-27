<?php
/* @var $this PreceptoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Preceptores',
);

$this->menu=array(
	array('label'=>'Create Preceptores', 'url'=>array('create')),
	array('label'=>'Manage Preceptores', 'url'=>array('admin')),
);
?>

<h1>Preceptores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
