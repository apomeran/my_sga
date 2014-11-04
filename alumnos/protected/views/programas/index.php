<?php
/* @var $this ProgramasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Programases',
);

$this->menu=array(
	array('label'=>'Crear Programas', 'url'=>array('create')),
	array('label'=>'Administrar Programas', 'url'=>array('admin')),
);
?>

<h1>Programases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
