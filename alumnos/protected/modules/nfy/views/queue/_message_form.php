<?php
/* @var $model MessageForm */
/* @var $form CActiveForm */
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'message-form',
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($model); ?>

	<div class="">
        <?php echo $form->label($model, 'Destinatario'); ?>
		
		<?php
		$user = Yii::app()->user;
		if (User::model()->findByPk($user->id)->rol == 3){ // ADMIN
			$result_array = array();
			$result_array["padre"] = "Todos los Padres";
			$result_array["preceptor"] = "Todos los Preceptores";
			foreach (Curso::model()->findAll() as $curso){
				$result_array["curso_id_" . $curso->cursoid] = $curso->getNombre();
			}
			echo $form->dropDownList($model,'category',$result_array);
		}
		if (User::model()->findByPk($user->id)->rol == 2){ // PRECEPTOR
			$result_array = array();
			$result_array["admin"] = "Administrador";
			$result_array["preceptor"] = "Todos los Preceptores";
			$preceptor = Preceptores::model()->findByAttributes(array('usuario'=>$user->id));
			$curso = Curso::model()->findByPk($preceptor->curso);
			$result_array["curso_id_" . $preceptor->curso] = "Todos los Padres de " . $curso->getNombre();
			
			echo $form->dropDownList($model,'category', $result_array);
		}
		if (User::model()->findByPk($user->id)->rol == 1){ // PADRE
			$result_array = array();
			$padres = Padres::model()->findByAttributes(array('usuario'=>$user->id));
			$alumnos = null;
			if ($padres != null)
			   	$alumnos = Alumnos::model()->findAllByAttributes(array(), "padreid = " .$padres->idpadre. " OR madreid = " .$padres->idpadre);
			if ($alumnos != null){
					foreach($alumnos as $alumno){
						$result_array['curso_id_' . $alumno->cursoactualid] = "Preceptor de curso " . Curso::model()->findByPk($alumno->cursoactualid)->getNombre();
					}
			}
			echo $form->dropDownList($model,'category',$result_array);			
		}
		
		?>
			
	</div>

	<div class="">
        <?php echo $form->label($model, 'Mensaje'); ?>
		<?php echo $form->textArea($model,'content', array('style'=>'width: 600px;', 'rows'=>5)); ?>
	</div>

    <br/>
    
	<div class="buttons">
		<?php echo CHtml::submitButton(Yii::t('NfyModule.app', 'Enviar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
