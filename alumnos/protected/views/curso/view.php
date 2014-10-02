<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	$model->cursoid,
);

$this->menu=array(
	array('label'=>'Listar Curso', 'url'=>array('index')),
	array('label'=>'Crear Curso', 'url'=>array('create')),
	array('label'=>'Actualizar Curso', 'url'=>array('update', 'id'=>$model->cursoid)),
	array('label'=>'Eliminar Curso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cursoid),'confirm'=>'Estas seguro de eliminar este Curso?')),
	array('label'=>'Administrar Curso', 'url'=>array('admin')),
);
?>

<h1>Ver Curso</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
	),
)); ?>

<br>
<br>
<h3>Titular</h3>
<?php 
	echo '<li>' . $model->titular0->fullname . '</li>';

?>

<br>
<br>
<h3>Materias</h3>
<?php foreach ($materias as $m) {
	echo '<li>' . $m->materia0->nombre . '</li>';
}
?>
<br>
<br>
<h3>Alumnos</h3>
<?php foreach ($model->alumnoses as $alumno) {
	echo '<li>' . $alumno->fullname . '</li>';
}
?>
