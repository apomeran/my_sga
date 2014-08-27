<?php
/* @var $this TemasMateriaController */
/* @var $model TemasMateria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idtemas_materiaid'); ?>
		<?php echo $form->textField($model,'idtemas_materiaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'materiaid'); ?>
		<?php echo $form->textField($model,'materiaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->