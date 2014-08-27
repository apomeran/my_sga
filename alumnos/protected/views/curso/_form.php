<?php
/* @var $this CursoController */
/* @var $model Curso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ano_calendario'); ?>
		<?php echo $form->textField($model,'ano_calendario'); ?>
		<?php echo $form->error($model,'ano_calendario'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'titular'); ?>
		<?php echo $form->dropDownList($model,'titular',CHtml::listData(Docentes::model()->findAll(),'id','nombre'));?>
		<?php echo $form->error($model,'titular'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Nivel'); ?>
		<?php echo $form->dropDownList($model,'nivelid',CHtml::listData(Nivel::model()->findAll(),'idnivel','nombre'));?>
		<?php echo $form->error($model,'nivelid'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ano_academico'); ?>
		<?php echo $form->dropDownList($model,'ano_academico',Curso::getAcademico());?>
		<?php echo $form->error($model,'ano_academico'); ?>
	</div>

		<div class="row">
		<?php echo $form->labelEx($model,'turnoid'); ?>
		<?php echo $form->dropDownList($model,'turnoid',CHtml::listData(Turnos::model()->findAll(),'idturno','nombre'));?>
		<?php echo $form->error($model,'turnoid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'division_salita'); ?>
		<?php echo $form->textField($model,'division_salita',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'division_salita'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->