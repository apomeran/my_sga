<?php
/* @var $this AlumnoMateriaPreviaController */
/* @var $data AlumnoMateriaPrevia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('alumno')); ?>:</b>
	<?php echo CHtml::encode($data->alumno0->fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materia')); ?>:</b>
	<?php echo CHtml::encode($data->materia0->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curso')); ?>:</b>
	<?php echo CHtml::encode($data->curso0->nombre); ?>
	<br />


</div>