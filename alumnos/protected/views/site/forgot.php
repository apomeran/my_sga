<?php
$this->pageTitle=Yii::app()->name . ' - Olvide Contraseña';
$this->breadcrumbs=array(
    'Olvide contraseña',
);
?>
<?php if(Yii::app()->user->hasFlash('forgot')): ?>
 
<div class="flash-success">
    <?php echo Yii::app()->user->getFlash('forgot'); ?>
</div>
 
<?php else: ?>
 
<div class="form">
 
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'forgot-form',
        'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>
	<h1>Reestablecer clave de acceso</h1>
	Se enviara un enlace a dicha casilla para resetear su clave de acceso.
	<br><br>
    <div class="row">
            E-mail: <input required name="Lupa[email]" id="ContactForm_email" type="email">
    </div>
 
    <div class="row buttons">
        <?php echo CHtml::submitButton('Enviar'); ?>
    </div>
	<br><br>
		Ante cualquier consulta puede contactarse a <a href="mailto:siaccia@institutoamanecer.edu.ar?subject=Consulta%20Clave">siaccia@institutoamanecer.edu.ar</a>
	
 
<?php $this->endWidget(); ?>
 
</div><!-- form -->
 
<?php endif; ?>