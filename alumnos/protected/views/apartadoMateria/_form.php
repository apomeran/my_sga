<?php
/* @var $this ApartadoMateriaController */
/* @var $model ApartadoMateria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'apartado-materia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'materia'); ?>
		<?php echo $form->dropDownList($model,'materia',CHtml::listData(Materia::model()->findAll(),'id','nombre'));?>
		<?php echo $form->error($model,'materia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apartado'); ?>
		<?php echo $form->dropDownList($model,'apartado',CHtml::listData(Apartado::model()->findAll(),'id','titulo'));?>
		<?php echo $form->error($model,'apartado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->