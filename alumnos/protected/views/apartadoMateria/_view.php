<?php
/* @var $this ApartadoMateriaController */
/* @var $data ApartadoMateria */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('materia')); ?>:</b>
	<?php echo CHtml::encode($data->materia0->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apartado')); ?>:</b>
	<?php echo CHtml::encode($data->apartado0->titulo); ?>
	<br />


</div>