<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Mi Cuenta</h1>




<?php
$this->menu=array(
	array('label'=>'Cambiar Clave', 'url'=>array('changepwd','id'=>$user->id)),
	array('label'=>'Cambiar Datos', 'url'=>array('changedata','id'=>$user_data->idpadre)),
);


if(Yii::app()->user->isGuest){
	echo '<h3> Por favor Iniciar Sesión</h3>';
}else{
	echo "<h3> Nombre Usuario: " . $user->getuserName() ."</h3>";
	echo '<img style="height:100px;" src="http://simpleicon.com/wp-content/uploads/user1.png" />';
	echo '<br>';
	echo "<h3> Datos: </h3>";
	echo '<li> Nombre:'. $user_data['nombre'].'</li>';
	echo '<li> Apellido:'. $user_data['apellido'].'</li>';
	echo '<li> DNI:'. $user_data['dni'].'</li>';
	echo '<li> Email:'. $user_data['mail'].'</li>';
	echo '<li> Telefono Fijo:'. $user_data['telefono_fijo'].'</li>';
	echo '<li> Telefono Celular:'. $user_data['telefono_celular'].'</li>';
	echo '<li> Observaciones:'. $user_data['observaciones'].'</li>';
	echo '<br>';
	echo "<h3> Hijos: </h3>";

	foreach($user->getSons() as $son_id){
		echo '<li>' . $son_id[1] . '</li>';
	}
}

