<?php
/* @var $this PadresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Padres',
);

$this->menu=array(
	array('label'=>'Crear Padres', 'url'=>array('create')),
	array('label'=>'Administrar Padres', 'url'=>array('admin')),
);
?>

<h1>Padres</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
