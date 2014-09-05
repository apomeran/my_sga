<?php
/* @var $this ProgramaMateriaController */
/* @var $model ProgramaMateria */

$this->breadcrumbs=array(
	'Programa Materias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProgramaMateria', 'url'=>array('index')),
	array('label'=>'Create ProgramaMateria', 'url'=>array('create')),
	array('label'=>'Update ProgramaMateria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProgramaMateria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProgramaMateria', 'url'=>array('admin')),
);
?>

<h1>View ProgramaMateria #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'programa',
		'materia',
	),
)); ?>
