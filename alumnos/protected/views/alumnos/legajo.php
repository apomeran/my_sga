<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->idalumno,
);

$this->menu=array(
	array('label'=>'List Alumnos', 'url'=>array('index')),
	array('label'=>'Create Alumnos', 'url'=>array('create')),
	array('label'=>'Update Alumnos', 'url'=>array('update', 'id'=>$model->idalumno)),
	array('label'=>'Delete Alumnos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idalumno),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alumnos', 'url'=>array('admin')),
);
?>

<h1>Legajo Alumno <?php echo $model->fullname;?> </h1>
<br>
<h3>Curso Actual <?php echo $model->cursoactual->nombre;?> </h3>
<br>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fullname',
		'dni',
		'cursoactual.nombre',
		'codigoalumno',
		'padre.fullname',
		'madre.fullname',
	),
)); ?>
<br><br>
<h3>-Materias en Curso- (Click para ver calificaciones)</h3>
<?php
	
	foreach($materias as $materia){
		echo '<li>'.CHtml::link($materia->materia0->nombre,array('alumnos/vermateria&id_alumno='.$model->idalumno.'&id_materia=' . $materia->materia0->id)).'</li>';
	}


?>

<br><br>
<h1>Inasistencias Alumno -</h1>
<br>
<h3>-Inasistencias Actuales- </h3>
<b><?php

	if (count($inasistencias) == 0 ){
		echo "El alumno <i>" . $model->nombre . " " . $model->apellido . "</i> no presenta inasistencias al dia de hoy <br><br>";
	}
	?><table>
	<?php 
		$j=0;
		$total=0;
	     foreach($inasistencias as $inasistencia){
			
				if ($j != 0){
					echo "<tr>";
				}
					echo "<td>" . date("Y - M - d D", strtotime($inasistencia->date_inasistencia)) . "</td>";
					$total += $inasistencia->valor;
					echo "<td>" .  $inasistencia->valor . "</td>";

				echo "</tr>";
				$j++;
		} 
		echo "<td> <b>Total</b> </td>";
		echo "<td> <b>$total</b> </td>";
	?>
	 </table>
</b>

<br><br>
<h3>Materias Previas </h3>

<?php 
if (count($previas) == 0)
  echo "El alumno no presenta materias previas al dia de la fecha";
foreach($previas as $p){
	echo $p->materia0->nombre;
	echo " - ";
	echo $p->curso0->nombre;
}
?>
