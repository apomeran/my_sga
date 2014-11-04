<?php
/* @var $this NivelController */
/* @var $model Nivel */

$this->breadcrumbs=array(
	'Nivels'=>array('index'),
	$model->idnivel=>array('view','id'=>$model->idnivel),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Niveles', 'url'=>array('index')),
	array('label'=>'Crear Nivel', 'url'=>array('create')),
	array('label'=>'Ver Niveles', 'url'=>array('view', 'id'=>$model->idnivel)),
	array('label'=>'Administrar Niveles', 'url'=>array('admin')),
);
?>

<h1>Actualizar Niveles <?php echo $model->idnivel; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>