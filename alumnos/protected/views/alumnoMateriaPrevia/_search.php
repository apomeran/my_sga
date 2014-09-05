<?php
/* @var $this AlumnoMateriaPreviaController */
/* @var $model AlumnoMateriaPrevia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alumno'); ?>
		<?php echo $form->textField($model,'alumno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'materia'); ?>
		<?php echo $form->textField($model,'materia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curso'); ?>
		<?php echo $form->textField($model,'curso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->