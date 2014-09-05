<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	$model->cursoid,
);

$this->menu=array(
	array('label'=>'List Curso', 'url'=>array('index')),
	array('label'=>'Create Curso', 'url'=>array('create')),
	array('label'=>'Update Curso', 'url'=>array('update', 'id'=>$model->cursoid)),
	array('label'=>'Delete Curso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cursoid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Curso', 'url'=>array('admin')),
);
?>

<h1>View Curso #<?php echo $model->cursoid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
	),
)); ?>
<br>
<br>
<h3>Materias</h3>
<?php foreach ($materias as $m) {
	echo '<li>' . $m->materia0->nombre . '</li>';
}
?>

