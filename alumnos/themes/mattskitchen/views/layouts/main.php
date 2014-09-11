<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="language" content="en" />

  <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/favicon.ico" type="image/x-icon" >

  <!-- blueprint CSS framework -->
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
  <!--[if lt IE 8]>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
  <![endif]-->

  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />

  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr-2.0.6.min.js"></script>

  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="wrapper">

  <header id="header">
    <div id="logo"><?php echo CHtml::link("Instituto Amanecer" , '/'); ?></div>

    <nav id="mainmenu">
	
      <?php
        $menuItems = array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'Inscripcion', 'url'=>array('cursoAlumno/admin') , 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Calificar', 'url'=>array('apartadoMateriaNota/create'), 'visible'=>Yii::app()->user->isPreceptor()),
				array('label'=>'Ver Calificaciones', 'url'=>array('apartadoMateriaNota/viewall'), 'visible'=>Yii::app()->user->isPreceptor()),
				array('label'=>'Cargar Falta', 'url'=>array('faltaAlumno/create'), 'visible'=>Yii::app()->user->isPreceptor()),
				array('label'=>'Ver Faltas', 'url'=>array('faltaAlumno/viewall'), 'visible'=>Yii::app()->user->isPreceptor()),
				array('label'=>'Cargar Previas', 'url'=>array('alumnoMateriaPrevia/create'), 'visible'=>Yii::app()->user->isPreceptor()),
				array('label'=>'Alumnos', 'url'=>array('alumnos/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Padres', 'url'=>array('padres/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Cursos', 'url'=>array('curso/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Docentes', 'url'=>array('docentes/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Preceptores', 'url'=>array('preceptores/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Usuarios', 'url'=>array('user/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Materias', 'url'=>array('materia/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Materias por Curso', 'url'=>array('cursoMateria/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Apartados', 'url'=>array('apartado/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Apartado por materia', 'url'=>array('apartadoMateria/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Programas', 'url'=>array('programas/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Asociar Materias a Programas', 'url'=>array('programaMateria/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				
				
        );
		if ( Yii::app()->user->isStandardUser() && !Yii::app()->user->isAdmin() && !Yii::app()->user->isPreceptor()){
			foreach(Yii::app()->user->getSons() as $son_id){
				
				$menuItems[] = array('label'=>'Ver Legajo ' . $son_id[1], 'url'=>array('alumnos/legajo&id=' . $son_id[0]));
			}
		}
		
		$menuItems[] = array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest);
		$menuItems[] = array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest);
      ?>
      <?php $this->widget('zii.widgets.CMenu',array(
        'items'=>$menuItems,
        'firstItemCssClass'=>'first',
        'lastItemCssClass'=>'last',
      )); ?>
    </nav><!-- mainmenu -->
  </header><!-- header -->

  <div id="main-wrapper"><div id="main" role="main">
    <?php echo $content; ?>
  </div></div><!-- main -->

  <footer id="footer">
    <nav id="footermenu">
      <?php $this->widget('zii.widgets.CMenu',array('items'=>$menuItems)); ?>
    </nav>
    <div class="content">
      <?php echo Yii::powered(); ?>
    </div>
  </footer><!-- footer -->

</div><!-- wrapper -->

</body>
</html>
