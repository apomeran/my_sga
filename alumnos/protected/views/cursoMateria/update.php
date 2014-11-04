<?php
/* @var $this CursoMateriaController */
/* @var $model CursoMateria */

$this->breadcrumbs=array(
	'Curso Materias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar CursoMateria', 'url'=>array('index')),
	array('label'=>'Crear CursoMateria', 'url'=>array('create')),
	array('label'=>'Ver CursoMateria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar CursoMateria', 'url'=>array('admin')),
);
?>

<h1>Actualizar CursoMateria <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>