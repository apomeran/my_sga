<?php
/* @var $this CursoMateriaController */
/* @var $model CursoMateria */

$this->breadcrumbs=array(
	'Curso Materias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CursoMateria', 'url'=>array('index')),
	array('label'=>'Create CursoMateria', 'url'=>array('create')),
	array('label'=>'View CursoMateria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CursoMateria', 'url'=>array('admin')),
);
?>

<h1>Update CursoMateria <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>