<?php
/* @var $this UserController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Users'=>array('index'),
);

if (Yii::app()->user->isAdmin()) {

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
);
}else{
$this->menu=array(array('label'=>'Volver', 'url'=>array('account')));
}
?>

<h1>Cambio de contraseña</h1>

<?php echo $message;

?>