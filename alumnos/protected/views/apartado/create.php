<?php
/* @var $this ApartadoController */
/* @var $model Apartado */

$this->breadcrumbs=array(
	'Apartados'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Apartados', 'url'=>array('index')),
	array('label'=>'Administrar Apartados', 'url'=>array('admin')),
);
?>

<h1>Crear Apartado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>