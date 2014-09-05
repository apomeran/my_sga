<?php
/* @var $this AlumnoMateriaPreviaController */
/* @var $model AlumnoMateriaPrevia */

$this->breadcrumbs=array(
	'Alumno Materia Previas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AlumnoMateriaPrevia', 'url'=>array('index')),
	array('label'=>'Create AlumnoMateriaPrevia', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#alumno-materia-previa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Alumno Materia Previas</h1>

<p>
Opcionalmente puedes ingresar un operador de comparacion (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de los valores de busqueda para especificar como la comparacion deberia realizarse.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alumno-materia-previa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'alumno',
		'materia',
		'curso',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
