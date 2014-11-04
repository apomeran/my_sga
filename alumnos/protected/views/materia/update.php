<?php
/* @var $this MateriaController */
/* @var $model Materia */

$this->breadcrumbs=array(
	'Materias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Materias', 'url'=>array('index')),
	array('label'=>'Crear Materia', 'url'=>array('create')),
	array('label'=>'Ver Materias', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Materias', 'url'=>array('admin')),
);
?>

<h1>Actualizar Materia <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>