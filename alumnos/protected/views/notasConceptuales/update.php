<?php
/* @var $this NotasConceptualesController */
/* @var $model NotasConceptuales */

$this->breadcrumbs=array(
	'Notas Conceptuales'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Notas Conceptuales', 'url'=>array('index')),
	array('label'=>'Crear Notas Conceptuales', 'url'=>array('create')),
	array('label'=>'Ver Notas Conceptuales', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Notas  Conceptuales', 'url'=>array('admin')),
);
?>

<h1>Actualizar Notas Conceptuales <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>