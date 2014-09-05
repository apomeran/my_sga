<?php
/* @var $this ProgramaMateriaController */
/* @var $model ProgramaMateria */
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
		<?php echo $form->label($model,'programa'); ?>
		<?php echo $form->textField($model,'programa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'materia'); ?>
		<?php echo $form->textField($model,'materia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->