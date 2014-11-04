<?php
/* @var $this ApartadoMateriaNotaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Apartado Materia Notas',
);

$this->menu=array(
	array('label'=>'Crear ApartadoMateriaNota', 'url'=>array('create')),
	array('label'=>'Administrar ApartadoMateriaNota', 'url'=>array('admin')),
);
?>

<h1>Apartado Materia Notas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
