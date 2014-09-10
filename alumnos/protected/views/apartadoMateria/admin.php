<?php
/* @var $this ApartadoMateriaController */
/* @var $model ApartadoMateria */

$this->breadcrumbs=array(
	'Apartado Materias'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Apartado por Materia', 'url'=>array('index')),
	array('label'=>'Crear Apartado por Materia', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#apartado-materia-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Apartado Materias</h1>

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
	'id'=>'apartado-materia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'materia0.nombre',
		'apartado0.titulo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
