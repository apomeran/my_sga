<?php
/* @var $this ApartadoMateriaController */
/* @var $data ApartadoMateria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materia')); ?>:</b>
	<?php echo CHtml::encode($data->materia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apartado')); ?>:</b>
	<?php echo CHtml::encode($data->apartado); ?>
	<br />


</div>