<table style="width:600px">
<tr>
  <?php echo $curso->getLayout(); ?>
  <tr>
	<?php
     $j = 0;
	 $combo_list = array();
	 foreach($materias as $materia){
		if ($j != 0){
				echo "<tr>";
		}
		echo "<td>" . $materia->materia0->nombre . "</td>";
		
		for($i=0; $i < $materia->materia0->getPeriodosCount(); $i++){
			
			$periodos_count[$i+1] = $i+1 ."º Periodo";
			$nota_value = " - ";
			foreach($notas as $nota){
				if($nota->materia == $materia->materia0->id && $nota->periodo == $i+1){
					$nota_value = $nota->valor;
				}
			}
			echo "<td>" . $nota_value . "</td>";
		}
		echo "</tr>";
		$j++;
	}?>
  </tr>

</tr>
</table>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'materia'); ?>
		<?php echo $form->dropDownList($model,'materia',CHtml::listData($materias,'id','materia0.nombre'));?>
		<?php echo $form->error($model,'materia'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'periodo'); ?>
		<?php echo $form->dropDownList($model,'periodo',$periodos_count);?>
		<?php echo $form->error($model,'periodo'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor');?>
		<?php echo $form->error($model,'valor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->