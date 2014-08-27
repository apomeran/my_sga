<?php
/* @var $this NotasConceptualesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Notas Conceptuales',
);

$this->menu=array(
	array('label'=>'Create NotasConceptuales', 'url'=>array('create')),
	array('label'=>'Manage NotasConceptuales', 'url'=>array('admin')),
);
?>

<h1>Notas Conceptuales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
