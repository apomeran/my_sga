<?php
/* @var $this NotaMateriaController */
/* @var $model NotaMateria */

$this->breadcrumbs=array(
	'Nota Materias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Ver calificaciones', 'url'=>array('apartadoMateriaNota/viewall')),
);
?>
<?php $alumno = Alumnos::model()->findByPk($model->alumno)?>
<?php $curso = Curso::model()->findByPk($alumno->cursoactualid)?>
<?php $materias = CursoMateria::model()->findAllByAttributes(array('curso'=>$alumno->cursoactualid));?>
<h1>Calificar Alumno - <small><?php echo $alumno->fullname?></small></h1>

<h3>-Datos alumno- </h3>
<img style="height:100px;" src="http://simpleicon.com/wp-content/uploads/user1.png">
<br>
<b>- Nombre:</b>  <?php echo $alumno->nombre ?> <br>
<b>- Apellido:</b>  <?php echo $alumno->apellido ?> <br>
<b>- DNI: </b> <?php echo $alumno->dni ?> <br>
<b>- Codigo Alumno:</b>  <?php echo $alumno->codigoalumno ?> <br>
<br>
<h3>-Curso Actual- </h3>
<b><?php echo $curso->nombre ?></b>
<br><br>

<h3>-Materias en Curso- </h3>
<?php
	
	foreach($materias as $materia){
		echo '<li>'.CHtml::link($materia->materia0->nombre,array('apartadoMateriaNota/createstep2&id=' .$model->id.'&id_alumno='.$alumno->idalumno.'&id_materia=' . $materia->materia0->id)).'</li>';
	}


?>

<br>


