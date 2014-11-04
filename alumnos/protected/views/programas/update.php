<?php
/* @var $this ProgramasController */
/* @var $model Programas */

$this->breadcrumbs=array(
	'Programases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Programas', 'url'=>array('index')),
	array('label'=>'Crear Programas', 'url'=>array('create')),
	array('label'=>'Ver Programas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Programas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Programas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>