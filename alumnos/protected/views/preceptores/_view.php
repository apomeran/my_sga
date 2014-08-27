<?php
/* @var $this PreceptoresController */
/* @var $data Preceptores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpreceptor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpreceptor), array('view', 'id'=>$data->idpreceptor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />


</div>