<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */

$this->breadcrumbs=array(
	'Alumnoses'=>array('index'),
	$model->idalumno,
);

$this->menu=array(
	array('label'=>'Listado Alumnos', 'url'=>array('index')),
	array('label'=>'Crear Alumnos', 'url'=>array('create')),
	array('label'=>'Actualizar Alumnos', 'url'=>array('update', 'id'=>$model->idalumno)),
	array('label'=>'Eliminar Alumnos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idalumno),'confirm'=>'Estas seguro de eliminar este alumno?')),
	array('label'=>'Administracion de Alumnos', 'url'=>array('admin')),
);
?>

<h1>Alumno <?php echo $model->fullname; ?></h1>

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

<br>
<br>

<h3>Boletin (Calificaciones Finales)</h3>
<table style="width:600px; font-size:11px !important">
<tr>
<?php

$final_apartado = Apartado::model()->findByAttributes(array('final' => 1));
$final_apartado_id = $final_apartado['id'];

if ($model->cursoactual != null){
 
	echo $model->cursoactual->getLayout();
	$j=0;
	foreach ($model->cursoactual->cursoMaterias as $m) {
			echo "<tr>";
		echo '<td>' . $m->materia0->nombre . '</td>';
		
		for ($l=0 ; $l < $model->cursoactual->getPeriodosCount(); $l++){
					$apartado_materia = ApartadoMateria::model()->findByAttributes(array('materia'=>$m->materia0->id, 'apartado'=> $final_apartado_id));
					$apartado_materia_id = $apartado_materia['id'];
						
					$nota = ApartadoMateriaNota::model()->findByAttributes(array('periodo' => ($l+1), 'alumno' => $model->idalumno,'id_apartado_materia' => $apartado_materia_id));

					if ($nota != null){
						if ($model->cursoactual->nivelid == 2)
						 $nota = $nota->notaConceptual->codigo;
						if ($model->cursoactual->nivelid == 3)
						 $nota = $nota->nota_numerica;
					}else{
						$nota = "-";
					}
					echo '<td><b>' . $nota . '</b></td>';
		}
		
		echo "</tr>";
		$j++;
	}
}else{
	echo "El alumno no pertenece a ningun curso";
}
?>
</table>

