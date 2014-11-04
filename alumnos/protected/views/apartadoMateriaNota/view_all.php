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
	$print="";
	foreach($cursos as $curso){
		if ($curso->nivel->nombre == "Primaria")
						$print .= '<li>' . CHtml::link($curso->getNombre(),array('apartadoMateriaNota/view_calificaciones&id=' . $curso->cursoid)) . '</li>';
	}
	if ($print != ""){
		echo "<b>Primaria: </b> <br>";
		echo $print;
	}

	$print="";
	foreach($cursos as $curso){
		if ($curso->nivel->nombre == "Secundario"){
			$print .= '<li>' . CHtml::link($curso->getNombre(),array('apartadoMateriaNota/view_calificaciones&id=' . $curso->cursoid)) . '</li>';
		}
	}
	if ($print != ""){
		echo "<br><b>Secundaria: </b> <br>";
		echo $print;
	}
	
?>




