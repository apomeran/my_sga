<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Cambiar Contraseña</h1>
<div class="form">
	<form id="user-form" action="/my_sga/alumnos/index.php?r=user/changepwd&id=<?php echo($model->id);?>" method="post">
		<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

		
		<div class="row">
			<label for="User_password" class="required">Password Anterior<span class="required">*</span></label>		<input size="60" maxlength="128" name="User[password]" id="User_password" type="password">		
		</div>
		
		<div class="row">
			<label for="User_npassword" class="required">Nueva Password <span class="required">*</span></label>		<input size="60" maxlength="128" name="User[npassword]" id="User_npassword" type="password">		
		</div>
		
		<div class="row buttons">
			<input type="submit" name="yt0" value="Crear">	</div>
	</form>
</div>
