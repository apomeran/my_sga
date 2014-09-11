<?php
/* @var $this ApartadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Apartados',
);

$this->menu=array(
	array('label'=>'Crear Apartado', 'url'=>array('create')),
	array('label'=>'Administrar Apartados', 'url'=>array('admin')),
);
?>

<h1>Apartados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
