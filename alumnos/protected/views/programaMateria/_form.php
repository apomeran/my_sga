<?php
/* @var $this ProgramaMateriaController */
/* @var $model ProgramaMateria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'programa-materia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'programa'); ?>
		<?php echo $form->dropDownList($model,'programa',CHtml::listData(Programas::model()->findAll(),'id','titulo'));?>
		<?php echo $form->error($model,'programa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'materia'); ?>
		<?php echo $form->dropDownList($model,'materia',CHtml::listData(Materia::model()->findAll(),'id','nombre'));?>
		<?php echo $form->error($model,'materia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->