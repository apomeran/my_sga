<?php
/* @var $this CursoAlumnoController */
/* @var $model CursoAlumno */

$this->breadcrumbs=array(
	'Curso Alumnos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Inscribir Alumno', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#curso-alumno-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Cursos Vigentes</h1>
<?php
	echo "<b>Primaria:</b> <br>";
	foreach($model as $curso){
		if ($curso->nivel->nombre == "Primaria")
			echo '<li>' . CHtml::link($curso->getNombre(),array('curso/view&id=' . $curso->cursoid)) . " -- " .   count($curso->alumnoses) . " Alumno(s) " . ' </li>';
	}
	echo "<br><b>Secundaria: </b>";
	foreach($model as $curso){
		if ($curso->nivel->nombre == "Secundario")
			echo '<li>' . CHtml::link($curso->getNombre(),array('curso/view&id=' . $curso->cursoid)) .  " -- " .   count($curso->alumnoses) . " Alumno(s) " .'</li>';
	}
	echo "<br><b>Jardin:</b> ";
	foreach($model as $curso){
		if ($curso->nivel->nombre == "Jardin")
			echo '<li>' . CHtml::link($curso->getNombre(),array('curso/view&id=' . $curso->cursoid)) .  " -- " .   count($curso->alumnoses) . " Alumno(s) " . '</li>';
	}
?>
