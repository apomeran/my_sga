<?php
/* @var $this NivelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nivels',
);

$this->menu=array(
	array('label'=>'Crear Nivel', 'url'=>array('create')),
	array('label'=>'Administrar Niveles', 'url'=>array('admin')),
);
?>

<h1>Niveles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
