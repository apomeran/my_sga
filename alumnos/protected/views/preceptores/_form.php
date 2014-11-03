<?php
/* @var $this PreceptoresController */
/* @var $model Preceptores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'preceptores-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	
	<?php
			$criteria = new CDbCriteria();
			$criteria->addCondition("cursoid not in (SELECT  curso FROM `preceptores`)");
			$cursos = Curso::model()->findAll($criteria);
			if (count($cursos) != 0){
	?>
	
	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		
		<?php echo $form->labelEx($model,'curso'); ?>
		<?php echo $form->dropDownList($model,'curso',CHtml::listData($cursos,'cursoid','nombre'));?>
		<?php echo $form->error($model,'curso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textArea($model,'email',array('rows'=>6, 'cols'=>50));;?>		
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

	
	<?php
	}else{
		echo "Todos los cursos ya tienen asignado un preceptor. <br> Puede cambiar la contraseña desde el panel. <br> Para cambiar el curso debe eliminar este preceptor, y volver a crearlo.";
	}
	?>
	<?php $this->endWidget(); ?>
</div><!-- form -->