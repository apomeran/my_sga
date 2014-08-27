<?php
/* @var $this CursoController */
/* @var $model Curso */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cursoid'); ?>
		<?php echo $form->textField($model,'cursoid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ano_calendario'); ?>
		<?php echo $form->textField($model,'ano_calendario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelid'); ?>
		<?php echo $form->textField($model,'nivelid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'turnoid'); ?>
		<?php echo $form->textField($model,'turnoid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'division_salita'); ?>
		<?php echo $form->textField($model,'division_salita',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->