<?php
/* @var $this CursoAlumnoController */
/* @var $model CursoAlumno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curso-alumno-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<?php $alumnos = Alumnos::model()->findAllByAttributes(array(),'cursoactualid = 0'); ?>
	<?php if (count($alumnos) > 0){ ?>
	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'curso'); ?>
		<?php echo $form->dropDownList($model,'curso',CHtml::listData(Curso::model()->findAll(),'cursoid','nombre'));?>
		<?php echo $form->error($model,'curso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alumno'); ?>
		<?php 
			echo $form->dropDownList($model,'alumno',CHtml::listData($alumnos,'idalumno','fullname'));
		?>
		<?php echo $form->error($model,'alumno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inscribir' : 'Guardar'); ?>
	</div>
	<?php
	}else{
		 echo "Todos los alumnos se encuentran ya inscriptos. ";
	}
	?>
<?php $this->endWidget(); ?>

</div><!-- form -->