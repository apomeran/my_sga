<?php
/* @var $this ProgramaMateriaController */
/* @var $model ProgramaMateria */

$this->breadcrumbs=array(
	'Programa Materias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Materias por Programa', 'url'=>array('index')),
	array('label'=>'Crear Materias por Programa', 'url'=>array('create')),
	array('label'=>'Ver Materias por Programa', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Materias por Programa', 'url'=>array('admin')),
);
?>

<h1>Actualizar Materias por Programa <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>