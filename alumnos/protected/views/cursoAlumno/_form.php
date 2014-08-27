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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'curso'); ?>
		<?php echo $form->dropDownList($model,'curso',CHtml::listData(Curso::model()->findAll(),'cursoid','nombre'));?>
		<?php echo $form->error($model,'curso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alumno'); ?>
		<?php echo $form->dropDownList($model,'alumno',CHtml::listData(Alumnos::model()->findAll(),'idalumno','nombre'));?>
		<?php echo $form->error($model,'alumno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->