<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Cursos', 'url'=>array('index')),
	array('label'=>'Crear Curso', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#curso-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Cursos</h1>

<p>
Opcionalmente puedes ingresar un operador de comparacion (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de los valores de busqueda para especificar como la comparacion deberia realizarse.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'curso-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ano_calendario',
		'ano_academico',
		'nivel.nombre',
		'turno.nombre',
		'division_salita',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
