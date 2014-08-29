<?php
/* @var $this CursoController */
/* @var $data Curso */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('Curso')); ?>:</b>
	<?php echo CHtml::encode($data->ano_calendario); echo " - " ; echo CHtml::encode($data->nivel->nombre); echo " - Turno: " ; echo CHtml::encode($data->turno->nombre); echo " - " ; echo CHtml::encode($data->ano_academico); echo " ". CHtml::encode($data->division_salita); ?>	
	<br />


</div>