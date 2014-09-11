<?php
/* @var $this ApartadoMateriaNotaController */
/* @var $data ApartadoMateriaNota */
?>

<div class="view">

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_apartado_materia')); ?>:</b>
	<?php echo CHtml::encode($data->id_apartado_materia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nota_conceptual')); ?>:</b>
	<?php echo CHtml::encode($data->nota_conceptual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodo')); ?>:</b>
	<?php echo CHtml::encode($data->periodo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />


</div>