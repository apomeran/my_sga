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

<?php

?>



<h3>Calificaciones para <b><?php echo $materia->nombre ?> </b><small> - <?php echo $curso->nombre ?> </small></h3>
<br>

<h3><small><?php if($periodo > 1) echo CHtml::link("Anterior", array("apartadoMateriaNota/view_calificaciones_materia&id=".$param1."&curso_id=".$param2."&periodo=". ($periodo-1))) . ' - ' ?> </small> <?php echo $curso->getPeriodoName($periodo)?> <small> <?php if($periodo < $curso->getPeriodosCount() + 2 ) echo ' - ' . CHtml::link("Siguiente", array("apartadoMateriaNota/view_calificaciones_materia&id=".$param1."&curso_id=".$param2."&periodo=". ($periodo+1))) ?></small></h3>



<br>

<table style="width:600px; font-size:11px !important">
<tr>
<td></td>
<td>Apellido y Nombre</td>
<?php
  $k=0;
  $ap_aux_array = array();
  foreach($materia->apartadosMaterias as $ap){
	echo '<td>' . $ap->apartado0->titulo . '</td>';
	$ap_aux_array[$k]  = $ap->id;
	$k++;
  }
  ?>
<tr>
<?php
	$j=0;
	
	foreach($alumnos as $alu){
		if ($j != 0)
				echo "<tr>";
		echo '<td>' . ($j+1) . '</td>';
		echo '<td>' . $alu->fullname . '</td>';
		for ($l=0 ; $l < count($ap_aux_array) ; $l++){
				$val_1 = $alu->idalumno;
				$val_2 = $ap_aux_array[$l];
				$nota = ApartadoMateriaNota::model()->findByAttributes(array('periodo' => $periodo, 'alumno' => $val_1,'id_apartado_materia' => $val_2));
				if ($nota != null){
					if ($curso->nivelid == 2)
					 $nota = $nota->notaConceptual->codigo;
					if ($curso->nivelid == 3)
					 $nota = $nota->nota_numerica;
				}else{
					$nota = "-";
				}
				echo '<td><b>' . $nota . '</b></td>';
		}
		if (count($ap_aux_array) > 0)
		 echo '<td>' . CHtml::link("Calificar", array('apartadoMateriaNota/create&id_alumno='.$alu->idalumno)) . '</td>';
		echo "</tr>";
		$j++;
	}
?>

</table>



