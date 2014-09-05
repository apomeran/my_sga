<?php
/* @var $this ProgramaMateriaController */
/* @var $data ProgramaMateria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('programa')); ?>:</b>
	<?php echo CHtml::encode($data->programa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materia')); ?>:</b>
	<?php echo CHtml::encode($data->materia); ?>
	<br />


</div>