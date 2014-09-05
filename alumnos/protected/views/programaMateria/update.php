<?php
/* @var $this ProgramaMateriaController */
/* @var $model ProgramaMateria */

$this->breadcrumbs=array(
	'Programa Materias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProgramaMateria', 'url'=>array('index')),
	array('label'=>'Create ProgramaMateria', 'url'=>array('create')),
	array('label'=>'View ProgramaMateria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProgramaMateria', 'url'=>array('admin')),
);
?>

<h1>Update ProgramaMateria <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>