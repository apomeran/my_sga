<?php
/* @var $this AlumnoMateriaPreviaController */
/* @var $model AlumnoMateriaPrevia */
/* @var $form CActiveForm */
?>
<?php 
		$curso_id = Yii::app()->user->getPreceptorCursos()[0]->cursoid; 
?>
<?php 

if (Yii::app()->user->isExclusiveAdmin()){
$materias = CursoMateria::model()->findAll();
}
else{
$materias = CursoMateria::model()->findAllByAttributes(array(),"curso = " . $curso_id);
}
		$i = 0; $str = "";
		foreach ($materias as $m){
			if($i!=0)
			 $str .= ","; 
			$str .=  $m->materia ;
			$i++;
		}
if (count($materias) > 0){		
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

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'alumno'); ?>
		
		  
		<?php 
		
		if (Yii::app()->user->isExclusiveAdmin()){
			echo $form->dropDownList($model,'alumno',CHtml::listData(Alumnos::model()->findAll(),'idalumno','fullname'));
		}
		else{
			echo $form->dropDownList($model,'alumno',CHtml::listData(Alumnos::model()->findAllByAttributes(array(),"cursoactualid=" . $curso_id ),'idalumno','fullname'));
		}
		
		
		?>		
		<?php echo $form->error($model,'alumno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'materia'); ?>
		
		<?php 
		if (Yii::app()->user->isExclusiveAdmin()){
			echo $form->dropDownList($model,'materia',CHtml::listData(Materia::model()->findAll(),'id','nombre'));
		}else{
			echo $form->dropDownList($model,'materia',CHtml::listData(Materia::model()->findAllByAttributes(array(), "id IN (" . $str . ")"),'id','nombre'));
		}
		?>		
		<?php echo $form->error($model,'materia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php } else {echo "No hay materias asociadas al curso";}		
?>
