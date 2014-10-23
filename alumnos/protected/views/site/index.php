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
	$this->widget('nfy.extensions.webNotifications.WebNotifications', array('url'=>$this->createUrl('/nfy/queue/poll&id=queue_preceptores')));
	// $auth=Yii::app()->authManager;
	 // $auth->createOperation('nfy.queue.read.subscribe','Suscribe to a Queue');
	// $role=$auth->getRole('nfy.queue.read');
	// $role->addChild('nfy.queue.read.subscribe');
	// $auth->assign('nfy.queue.read','admin');


	// Yii::app()->queue_preceptores->subscribe(Yii::app()->user->getId());
	echo '<img style="height:100px;" src="http://simpleicon.com/wp-content/uploads/user1.png" />';
}


