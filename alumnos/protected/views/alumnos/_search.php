<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idalumno'); ?>
		<?php echo $form->textField($model,'idalumno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dni'); ?>
		<?php echo $form->textField($model,'dni',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cursoactualid'); ?>
		<?php echo $form->textField($model,'cursoactualid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigoalumno'); ?>
		<?php echo $form->textField($model,'codigoalumno',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'padreid'); ?>
		<?php echo $form->textField($model,'padreid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'madreid'); ?>
		<?php echo $form->textField($model,'madreid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->