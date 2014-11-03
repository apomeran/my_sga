<?php
/* @var $this UserController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
if (Yii::app()->user->isAdmin())
	$this->menu=array(
		array('label'=>'Listar Usuarios', 'url'=>array('index')),
		array('label'=>'Crear Usuario', 'url'=>array('create')),
		array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->id)),
		array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
		array('label'=>'Cambiar contraseña de Usuario', 'url'=>array('user/changepwd&id='.$model->id)),
	);
else{
	$this->menu=array(
		array('label'=>'Listar Usuarios', 'url'=>array('index')),
		array('label'=>'Crear Usuario', 'url'=>array('create')),
		array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->id)),
		array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
	);
}
?>

<h1>Actualizar Usuario <?php echo $model->username; ?></h1>

<?php $this->renderPartial('_formupdate', array('model'=>$model)); ?>