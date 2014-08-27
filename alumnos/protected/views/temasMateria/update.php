<?php
/* @var $this TemasMateriaController */
/* @var $model TemasMateria */

$this->breadcrumbs=array(
	'Temas Materias'=>array('index'),
	$model->idtemas_materiaid=>array('view','id'=>$model->idtemas_materiaid),
	'Update',
);

$this->menu=array(
	array('label'=>'List TemasMateria', 'url'=>array('index')),
	array('label'=>'Create TemasMateria', 'url'=>array('create')),
	array('label'=>'View TemasMateria', 'url'=>array('view', 'id'=>$model->idtemas_materiaid)),
	array('label'=>'Manage TemasMateria', 'url'=>array('admin')),
);
?>

<h1>Update TemasMateria <?php echo $model->idtemas_materiaid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>