<?php
/* @var $this CursoMateriaController */
/* @var $data CursoMateria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('curso')); ?>:</b>
	<?php echo CHtml::encode($data->curso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materia')); ?>:</b>
	<?php echo CHtml::encode($data->materia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesor')); ?>:</b>
	<?php echo CHtml::encode($data->profesor); ?>
	<br />


</div>