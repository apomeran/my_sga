<?php
/* @var $this ApartadoMateriaNotaController */
/* @var $model ApartadoMateriaNota */

$this->breadcrumbs = array(
    'Apartado Materia Notas' => array('index')
);

$this->menu = array(
    array('label' => 'Ver calificaciones', 'url' => array('')),
);
?>

<h1>Ver calificaciones por curso</h1>
<br>
<?php
echo "<b>Primaria:</b> <br>";
	foreach($cursos as $curso){
		if ($curso->nivel->nombre == "Primaria")
						echo '<li>' . CHtml::link($curso->getNombre(),array('curso/view&id=' . $curso->cursoid)) . '</li>';

	}
	echo "<br><b>Secundaria: </b>";
	foreach($cursos as $curso){
		if ($curso->nivel->nombre == "Secundario")
			echo '<li>' . CHtml::link($curso->getNombre(),array('curso/view&id=' . $curso->cursoid)) . '</li>';
	}
	
?>




