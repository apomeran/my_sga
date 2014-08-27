<?php
/* @var $this NivelController */
/* @var $data Nivel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idnivel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idnivel), array('view', 'id'=>$data->idnivel)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>