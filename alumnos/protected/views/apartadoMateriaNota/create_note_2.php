<?php
/* @var $this NotaMateriaController */
/* @var $model NotaMateria */

$this->breadcrumbs=array(
	'Nota Materias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NotaMateria', 'url'=>array('index')),
	array('label'=>'Manage NotaMateria', 'url'=>array('admin')),
);
?>

<h1>Calificar Alumno - <small><?php echo $alumno->fullname?></small></h1>

<br>

<h3>-Materia <?php echo $materia->nombre ?>- </h3>

<table style="width:600px">
<tr>
  <?php echo $curso->getMinLayout(); ?>
 <tr>
	<?php
     $j = 0;
	 $periodos_count = array();
	 foreach($apartados as $apartado){
		if ($j != 0){
				echo "<tr>";
		}
		$title = $apartado->apartado0;
		if ($title->id == 9) //Calificacion final
			$title->titulo = '<b>' . $title->titulo . '</b>';
		echo "<td>" . $title->titulo . "</td>";
		for($i=0; $i < $materia->getPeriodosCount(); $i++){
			
			$periodos_count[$i+1] = $i+1 ."º Periodo";
			$nota_value = " - ";
			foreach($notas as $nota){
				 if($nota->idApartadoMateria->id == $apartado->id && $nota->idApartadoMateria->materia == $materia->id && $nota->periodo == $i+1){
					if ($curso->nivelid == 2)
					 $nota_value = $nota->notaConceptual->codigo;
					if ($curso->nivelid == 3)
					 $nota_value = $nota->nota_numerica; 
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
  
  
<br>

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
		<?php echo $form->labelEx($model,'Apartado'); ?>
		<?php echo $form->dropDownList($model,'id_apartado_materia',CHtml::listData($apartados,'id','apartado0.titulo'));?>
		<?php echo $form->error($model,'id_apartado_materia'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'periodo'); ?>
		<?php echo $form->dropDownList($model,'periodo',$periodos_count);?>
		<?php echo $form->error($model,'periodo'); ?>
	</div>
	<div class="row">
	
		<?php 
		 if ($curso->nivelid == 2){
			 echo $form->labelEx($model,'nota_conceptual'); 
			 echo $form->dropDownList($model,'nota_conceptual',CHtml::listData(NotasConceptuales::model()->findAll(),'id','valor'));
			 echo $form->error($model,'nota_conceptual'); 
		 }
		 if ($curso->nivelid == 3){
			 echo $form->labelEx($model,'nota_numerica'); 
			$this->widget('CMaskedTextField', array(
			'model' => $model,
			'attribute' => 'nota_numerica',
			'mask' => '9,99',
			'htmlOptions' => array('size' => 3)
			));
			 echo $form->error($model,'nota_numerica'); 
		 }
		 ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cargar Nota'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

