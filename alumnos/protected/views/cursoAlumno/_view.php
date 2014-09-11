<?php
/* @var $this CursoAlumnoController */
/* @var $data CursoAlumno */
?>

<div class="view">

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('curso')); ?>:</b>
	<?php echo CHtml::encode($data->curso0->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alumno')); ?>:</b>
	<?php echo CHtml::encode($data->alumno0->fullname); ?>
	<br />


</div>