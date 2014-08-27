<?php
/* @var $this CursoMateriaController */
/* @var $model CursoMateria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curso-materia-form',
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
		<?php echo $form->labelEx($model,'materia'); ?>
		<?php echo $form->dropDownList($model,'materia',CHtml::listData(Materia::model()->findAll(),'id','nombre'));?>
		<?php echo $form->error($model,'materia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesor'); ?>
		<?php echo $form->dropDownList($model,'profesor',CHtml::listData(Docentes::model()->findAll(),'id','nombre'));?>
		<?php echo $form->error($model,'profesor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->