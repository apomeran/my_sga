<?php
/* @var $this ApartadoController */
/* @var $model Apartado */

$this->breadcrumbs=array(
	'Apartados'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Apartados', 'url'=>array('index')),
	array('label'=>'Crear Apartado', 'url'=>array('create')),
	array('label'=>'Ver Apartados', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Apartados', 'url'=>array('admin')),
);
?>

<h1>Actualizar Apartado <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>