<?php
/* @var $this ApartadoMateriaNotaController */
/* @var $model ApartadoMateriaNota */

$this->breadcrumbs = array(
    'Faltas Alumnos' => array('index')
);

$this->menu = array(
    array('label' => 'Ver Faltas', 'url' => array('')),
);
?>

<h1>Ver Faltas por curso</h1>
<br>
<?php
echo "<b>Primaria:</b> <br>";
	foreach($cursos as $curso){
		if ($curso->nivel->nombre == "Primaria")
		    echo '<li>' . CHtml::link($curso->getNombre(),array('faltaAlumno/view_faltas&id=' . $curso->cursoid)) . '</li>';

	}
	echo "<br><b>Secundaria: </b>";
	foreach($cursos as $curso){
		if ($curso->nivel->nombre == "Secundario")
			echo '<li>' . CHtml::link($curso->getNombre(),array('faltaAlumno/view_faltas&id=' . $curso->cursoid)) . '</li>';
	}
	
?>




