<?php
/* @var $this ApartadoMateriaNotaController */
/* @var $model ApartadoMateriaNota */

$this->breadcrumbs = array(
    'Falta Materia' => array('index')
);

$this->menu = array(
    array('label' => 'Ver faltas', 'url' => array('faltaAlumno/viewall')),
);
?>

<h3>Faltas para  <small> - <?php echo $curso->nombre ?> </small></h3>
<br>
<br>

<table style="width:600px; font-size:11px !important">
<tr>
<td></td>



<?php
	$j=0;
	if (count($alumnos) == 0){
	 echo "No hay alumnos asociados a este curso";
	 echo '<br>';
	 echo '<br>';
     echo CHtml::link("Volver al listado", array('faltaAlumno/viewall'));

	}else{
		echo '<td>Apellido y Nombre</td>';
		echo '<td>Faltas Totales</td>';
		echo '<tr>';
	}
	foreach($alumnos as $alu){
		if ($j != 0)
				echo "<tr>";
		echo '<td>' . ($j+1) . '</td>';
		echo '<td>' . $alu->fullname . '</td>';
		$val_1 = $alu->idalumno;
		$total = 0;
		$faltas_totales = FaltaAlumno::model()->findAllByAttributes(array('alumno' => $val_1), "curso = ". $curso->cursoid. " AND valor !=0");
		foreach($faltas_totales as $falta){
     		$total += $falta->valor;
			
		}
		echo '<td><b>' . $total . '</b></td>';
	    echo '<td>' . CHtml::link("Cargar Falta", array('faltaAlumno/create&id_alumno=' . $alu->idalumno)) . '</td>';
		echo "</tr>";
		$j++;
	}
?>

</table>






