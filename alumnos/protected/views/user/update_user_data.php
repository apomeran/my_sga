<?php
/* @var $this PadresController */
/* @var $model Padres */


$this->menu=array(
	array('label'=>'Volver', 'url'=>array('account')),
);
?>

<h1>Actualizar Datos</h1>
<h3>Se conservará el nombre de usuario actual</h3>

<?php $this->renderPartial('_form_user_data', array('model'=>$model)); ?>