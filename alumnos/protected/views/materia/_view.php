<?php
/* @var $this MateriaController */
/* @var $data Materia */
?>

<div class="view">

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel')); ?>:</b>
	<?php echo CHtml::encode($data->nivel->nombre); ?>
	<br />
	<br>
	
	<b><?php 
    echo CHtml::encode($data->getAttributeLabel('Apartados')); ?>:</b>
	<?php foreach ($data->apartadosMaterias as $ap) {
	echo '<li>' . $ap->apartado0->titulo . '</li>';
	}
	?>
	<br />




</div>