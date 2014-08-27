<?php
/* @var $this CursoController */
/* @var $data Curso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cursoid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cursoid), array('view', 'id'=>$data->cursoid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano_calendario')); ?>:</b>
	<?php echo CHtml::encode($data->ano_calendario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelid')); ?>:</b>
	<?php echo CHtml::encode($data->nivelid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('turnoid')); ?>:</b>
	<?php echo CHtml::encode($data->turnoid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('division_salita')); ?>:</b>
	<?php echo CHtml::encode($data->division_salita); ?>
	<br />


</div>