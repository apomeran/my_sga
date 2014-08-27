<?php
/* @var $this NotaMateriaController */
/* @var $model NotaMateria */

$this->breadcrumbs=array(
	'Nota Materias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NotaMateria', 'url'=>array('index')),
	array('label'=>'Manage NotaMateria', 'url'=>array('admin')),
);
?>
<?php $alumno = Alumnos::model()->findByPk($model->alumno)?>
<?php $curso = Curso::model()->findByPk($alumno->cursoactualid)?>
<?php $materias = CursoMateria::model()->findAllByAttributes(array('curso'=>$alumno->cursoactualid));?>
<?php $inasistencias = FaltaAlumno::model()->findAllByAttributes(array('alumno'=>$model->alumno), "curso = " . $alumno->cursoactualid . " AND valor != 0) ORDER BY (date_inasistencia");?>
<h1>Inasistencias Alumno - <small><?php echo $alumno->fullname?></small></h1>

<h3>-Datos alumno- </h3>

<b>- Nombre:</b>  <?php echo $alumno->nombre ?> <br>
<b>- Apellido:</b>  <?php echo $alumno->apellido ?> <br>
<b>- DNI: </b> <?php echo $alumno->dni ?> <br>
<b>- Codigo Alumno:</b>  <?php echo $alumno->codigoalumno ?> <br>
<br>
<h3>-Curso Actual- </h3>
<b><?php echo $curso->nombre ?></b>
<br><br>

<h3>-Inasistencias Actuales- </h3>
<b><?php

	if (count($inasistencias) == 0 ){
		echo "El alumno <i>" . $alumno->nombre . " " . $alumno->apellido . "</i> no presenta inasistencias al dia de hoy";
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

<h3>-Cargar Falta- </h3>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
	<?php 
	echo $form->labelEx($model,'date_inasistencia');
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'date_inasistencia',
			 'value'=>$model->date_inasistencia,
			'model'=>$model,
			'options'=>array(
				'dateFormat' => 'yy-mm-dd',
			),
			'htmlOptions'=>array(
					'style'=>'height:20px;'
			),
	));
	?>
		<?php echo $form->error($model,'date_inasistencia'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->dropDownList($model,'valor',Curso::getInasistencias());?>
		<?php echo $form->error($model,'valor'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Cargar Falta'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
