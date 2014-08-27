<?php
/* @var $this AlumnosController */
/* @var $data Alumnos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idalumno')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idalumno), array('view', 'id'=>$data->idalumno)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dni')); ?>:</b>
	<?php echo CHtml::encode($data->dni); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cursoactualid')); ?>:</b>
	<?php echo CHtml::encode($data->cursoactualid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoalumno')); ?>:</b>
	<?php echo CHtml::encode($data->codigoalumno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('padreid')); ?>:</b>
	<?php echo CHtml::encode($data->padreid); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('madreid')); ?>:</b>
	<?php echo CHtml::encode($data->madreid); ?>
	<br />

	*/ ?>

</div>