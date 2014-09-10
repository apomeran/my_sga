<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
);
$this->menu=array(
	array('label'=>'Volver al legajo', 'url'=>array('alumnos/legajo&id=' . $alumno->idalumno)),
);

?>

<h1>Legajo Alumno <?php echo $alumno->fullname;?> </h1>
<br>
<h3>Curso Actual <?php echo $alumno->cursoactual->nombre;?> </h3>
<br>
<h3>-Materia <?php echo $materia->nombre ?>- </h3>

<table style="width:600px">
<tr>
  <?php if (count($apartados) != 0){ echo $alumno->cursoactual->getMinLayout(); } ?>
 <tr>
	<?php
     $j = 0;
	 $periodos_count = array();
	 if (count($apartados) == 0){
		echo "No fueron cargados los apartados para la materia";
	 }
	 foreach($apartados as $apartado){
		if ($j != 0){
				echo "<tr>";
		}
		$title = $apartado->apartado0;
		if ($title->id == 9) //Calificacion final
			$title->titulo = '<b>' . $title->titulo . '</b>';
		echo "<td>" . $title->titulo . "</td>";
		for($i=0; $i < $materia->getPeriodosCount(); $i++){
			
			$periodos_count[$i+1] = $i+1 ."º Periodo";
			$nota_value = " - ";
			foreach($notas as $nota){
				 if($nota->idApartadoMateria->apartado == $apartado->id && $nota->idApartadoMateria->materia == $materia->id && $nota->periodo == $i+1){
					 $nota_value = $nota->notaConceptual->codigo;
				 }
			}
			echo "<td>" . $nota_value . "</td>";
		}
		echo "</tr>";
		$j++;
	}?>
  </tr>

</tr>
</table> 
 
<?php echo CHtml::link("Volver",array('alumnos/legajo&id='.$alumno->idalumno)); ?>
  
<br>