<?php
/* @var $this CursoMateriaController */
/* @var $model CursoMateria */

$this->breadcrumbs=array(
	'Curso Materias'=>array('index'),
	'Administrar ',
);

$this->menu=array(
	array('label'=>'Listar Materias por curso', 'url'=>array('index')),
	array('label'=>'Asociar materia a un curso', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#curso-materia-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Materias por Cursos</h1>

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
	'id'=>'curso-materia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'curso0.nombre',
		'materia0.nombre',
		'profesor0.nombre',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
