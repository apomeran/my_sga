<?php
/* @var $this DocentesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Docentes',
);

$this->menu=array(
	array('label'=>'Create Docentes', 'url'=>array('create')),
	array('label'=>'Manage Docentes', 'url'=>array('admin')),
);
?>

<h1>Docentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
