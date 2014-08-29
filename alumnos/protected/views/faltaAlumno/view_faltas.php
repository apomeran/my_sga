<?php
/* @var $this ApartadoMateriaNotaController */
/* @var $model ApartadoMateriaNota */

$this->breadcrumbs = array(
    'Falta Materia' => array('index')
);

$this->menu = array(
    array('label' => 'Ver faltas', 'url' => array('')),
);
?>

<?php

?>



<h3>Faltas para  <small> - <?php echo $curso->nombre ?> </small></h3>
<br>
<br>

<table style="width:600px; font-size:11px !important">
<tr>
<td></td>
<td>Apellido y Nombre</td>
<td>Faltas Totales</td>

<tr>
<?php
	$j=0;
	
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
	    echo '<td>' . CHtml::link("Ver", array()) . '</td>';
		echo "</tr>";
		$j++;
	}
?>

</table>






