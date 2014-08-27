<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumnos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dni'); ?>
		<?php echo $form->textField($model,'dni',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dni'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Curso Actual'); ?>
		<?php echo $form->dropDownList($model,'cursoactualid',CHtml::listData(Curso::model()->findAll(),'cursoid','nombre'));?>
		<?php echo $form->error($model,'cursoactualid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Codigo Alumno'); ?>
		<?php echo $form->textField($model,'codigoalumno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigoalumno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Padre'); ?>
		<?php echo $form->dropDownList($model,'padreid',CHtml::listData(Padres::model()->findAll(),'idpadre','fullname'));?>
		<?php echo $form->error($model,'padreid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Madre'); ?>
		<?php echo $form->dropDownList($model,'madreid',CHtml::listData(Padres::model()->findAll(),'idpadre','fullname'));?>
		<?php echo $form->error($model,'madreid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->