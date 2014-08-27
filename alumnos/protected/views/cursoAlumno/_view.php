<?php
/* @var $this CursoAlumnoController */
/* @var $data CursoAlumno */
?>

<div class="view">

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('curso')); ?>:</b>
	<?php echo CHtml::encode($data->curso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alumno')); ?>:</b>
	<?php echo CHtml::encode($data->alumno); ?>
	<br />


</div>