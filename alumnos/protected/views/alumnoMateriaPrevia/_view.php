<?php
/* @var $this AlumnoMateriaPreviaController */
/* @var $data AlumnoMateriaPrevia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alumno')); ?>:</b>
	<?php echo CHtml::encode($data->alumno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materia')); ?>:</b>
	<?php echo CHtml::encode($data->materia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curso')); ?>:</b>
	<?php echo CHtml::encode($data->curso); ?>
	<br />


</div>