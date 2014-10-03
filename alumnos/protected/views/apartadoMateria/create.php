<?php
/* @var $this ApartadoMateriaController */
/* @var $model ApartadoMateria */

$this->breadcrumbs=array(
	'Apartados Materias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Ver Todos', 'url'=>array('admin')),
);
?>

<h1>Crear Apartado por Materia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>