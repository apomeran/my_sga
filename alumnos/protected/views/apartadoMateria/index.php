<?php
/* @var $this ApartadoMateriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Apartado Materias',
);

$this->menu=array(
	array('label'=>'Crear ApartadoMateria', 'url'=>array('create')),
	array('label'=>'Administrar ApartadoMateria', 'url'=>array('admin')),
);
?>

<h1>Apartado Materias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
