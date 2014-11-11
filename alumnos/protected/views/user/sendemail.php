<?php
/* @var $this UserController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Usuario', 'url'=>array('index')),
	array('label'=>'Cambiar contraseña', 'url'=>array('changepwd', 'id'=>$model->id)),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de eliminar este item?')),
	array('label'=>'Administrar Usuario', 'url'=>array('admin')),
);
?>

<h1>Enviar un mail al Usuario <?php echo $model->username; ?></h1>
<h3>E-Mail: <?php echo $model->email; ?></h3>
<?php echo '
<form action="/my_sga/alumnos/index.php?r=user/sendemail&id=' . $model->id . '&'. trim($to).'=1" method="POST">
	Mensaje:
	<input type="textarea" name="emailcontent"></input>
	<input type="submit"/>
</form>
';

