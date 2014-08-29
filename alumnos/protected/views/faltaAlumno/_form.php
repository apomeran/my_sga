<?php
/* @var $this FaltaAlumnoController */
/* @var $model FaltaAlumno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'falta-alumno-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'alumno'); ?>
		<?php
	
			$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
			'model' => $model,
			'attribute' => 'alumno',
			'name'=>'customerid',
			'value'=>'',
			'source'=>$this->createUrl('ApartadoMateriaNota/autocomplete'),
			// additional javascript options for the autocomplete plugin
			'options'=>array(
					'showAnim'=>'fold',
					'minLength'=>'1',
				),
			));
			
			?>
		<?php echo $form->error($model,'alumno'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->