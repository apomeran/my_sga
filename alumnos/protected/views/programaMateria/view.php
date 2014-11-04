<?php
/* @var $this ProgramaMateriaController */
/* @var $model ProgramaMateria */

$this->breadcrumbs=array(
	'Programa Materias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar ProgramaMateria', 'url'=>array('index')),
	array('label'=>'Crear ProgramaMateria', 'url'=>array('create')),
	array('label'=>'Actualizar ProgramaMateria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar ProgramaMateria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar ProgramaMateria', 'url'=>array('admin')),
);
?>

<h1>Ver Programa Materia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'programa',
		'materia',
	),
)); ?>
