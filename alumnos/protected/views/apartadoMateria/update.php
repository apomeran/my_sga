<?php
/* @var $this ApartadoMateriaController */
/* @var $model ApartadoMateria */

$this->breadcrumbs=array(
	'Apartado Materias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Crear ApartadoMateria', 'url'=>array('create')),
	array('label'=>'Ver ApartadoMateria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Ver Todos', 'url'=>array('admin')),
);
?>

<h1>Actualizar ApartadoMateria <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>