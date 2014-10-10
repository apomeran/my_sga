<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Mi Cuenta</h1>



<?php
$this->menu=array(
	array('label'=>'Cambiar Clave', 'url'=>array('changepwd','id'=>$user->id)),
);


if(Yii::app()->user->isGuest){
	echo '<h3> Por favor Iniciar Sesión</h3>';
}else{
	echo "<h3> Nombre Usuario: " . $user->getuserName() ."</h3>";
	echo '<img style="height:100px;" src="http://simpleicon.com/wp-content/uploads/user1.png" />';
	echo '<br>';
	echo "<h3> Hijos: </h3>";

	foreach($user->getSons() as $son_id){
		echo '<li>' . $son_id[1] . '</li>';
	}
}

