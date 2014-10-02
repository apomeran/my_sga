<?php
/* @var $this AlumnosController */
/* @var $data Alumnos */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre completo')); ?>:</b>
	<?php echo CHtml::encode($data->fullname); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('dni')); ?>:</b>
	<?php echo CHtml::encode($data->dni); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curso actual')); ?>:</b>
	<?php echo CHtml::encode($data->cursoactual->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo alumno')); ?>:</b>
	<?php echo CHtml::encode($data->codigoalumno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre Completo Padre')); ?>:</b>
	<?php echo CHtml::encode($data->padre->fullname); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre Completo Madre')); ?>:</b>
	<?php echo CHtml::encode($data->madre->fullname); ?>
	<br />

</div>