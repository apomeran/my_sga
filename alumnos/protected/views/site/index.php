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
	$this->widget('nfy.extensions.webNotifications.WebNotifications', array('url'=>$this->createUrl('/nfy/queue/poll&id=queue_amanecer')));
	// $auth=Yii::app()->authManager;
	 // $auth->createOperation('nfy.queue.read.subscribe','Suscribe to a Queue');
	// $role=$auth->getRole('nfy.queue.read');
	// $role->addChild('nfy.queue.read.subscribe');
	// $auth->assign('nfy.queue.read','admin');


	// Yii::app()->queue_preceptores->subscribe(Yii::app()->user->getId());
	echo '<img style="height:100px;" src="http://simpleicon.com/wp-content/uploads/user1.png" />';
}
if (Yii::app()->user->isExclusivePreceptor()){
	$preceptor = Preceptores::model()->findByAttributes(array('usuario' => Yii::app()->user->id));
	if ($preceptor != null){
		$curso = Curso::model()->findByPk($preceptor->curso);
		echo '<br>';
		echo '<br>';
		echo '<h3> Curso a cargo: ' . ($curso->getNombre()) . '</h3>';
		echo '<br>';
		$alumnosEntry = CursoAlumno::model()->findAllByAttributes(array('curso'=>$preceptor->curso));
		if (empty($alumnosEntry))
			echo "No hay alumnos asociados a este curso";
		foreach($alumnosEntry as $alumno){
			$alu = Alumnos::model()->findByPk($alumno->alumno);
			echo '<li>'. CHtml::link($alu->getFullName(),array('alumnos/legajo&id='. $alu->idalumno ),array('class'=>'search-button')) .'</li>';
		}
	}
}

