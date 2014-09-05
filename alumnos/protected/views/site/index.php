<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Sistema de Administración <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php
if(Yii::app()->user->isGuest){
	echo '<h3> Por favor Iniciar Sesión</h3>';
}else{
	echo "<h3> Bienvenido " . Yii::app()->user->getuserName() ."</h3>";
}


