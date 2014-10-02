<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	$model->cursoid=>array('view','id'=>$model->cursoid),
	'Update',
);

$this->menu=array(
	array('label'=>'-', 'url'=>array('#')),
);
?>

<h1>Actualizar Curso <?php echo $model->nombre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>