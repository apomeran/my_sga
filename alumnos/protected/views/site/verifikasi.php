<?php
$this->pageTitle=Yii::app()->name . ' - Cambiar Contraseña';
$this->breadcrumbs=array(
    'Cambiar Contraseña',
);
?>
<h2>Hola! <?php echo $model->username;?> :v</h2>
<div class="form">
    <h2>Cambiar Contraseña</h2>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'Ganti-form',
)); ?>
 
    <div class="row">
            Nueva Contraseña : <input name="Ganti[password]" id="ContactForm_email" type="password">
            <input name="Ganti[tokenhid]" id="ContactForm_email" type="hidden" value="<?php echo $model->token?>">
    </div>
 
    <div class="row buttons">
        <?php echo CHtml::submitButton('Enviar'); ?>
    </div>
 
<?php $this->endWidget(); ?>
 
</div><!-- form -->