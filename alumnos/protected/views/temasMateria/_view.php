<?php
/* @var $this TemasMateriaController */
/* @var $data TemasMateria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtemas_materiaid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtemas_materiaid), array('view', 'id'=>$data->idtemas_materiaid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materiaid')); ?>:</b>
	<?php echo CHtml::encode($data->materiaid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>