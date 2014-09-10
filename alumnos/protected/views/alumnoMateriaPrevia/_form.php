<?php
/* @var $this AlumnoMateriaPreviaController */
/* @var $model AlumnoMateriaPrevia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumno-materia-previa-form',
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
		$curso_id = Yii::app()->user->getPreceptorCursos()[0]->cursoid; 
		?>
		  
		<?php echo $form->dropDownList($model,'alumno',CHtml::listData(Alumnos::model()->findAllByAttributes(array(),"cursoactualid=" . $curso_id ),'idalumno','fullname'));?>		
		<?php echo $form->error($model,'alumno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'materia'); ?>
		<?php $materias = CursoMateria::model()->findAllByAttributes(array(),"curso = " . $curso_id);
		$i = 0; $str = "";
		foreach ($materias as $m){
			if($i!=0)
			 $str .= ","; 
			$str .=  $m->materia ;
			$i++;
		}
		?>
		<?php echo $form->dropDownList($model,'materia',CHtml::listData(Materia::model()->findAllByAttributes(array(), "id IN (" . $str . ")"),'id','nombre'));?>		
		<?php echo $form->error($model,'materia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->