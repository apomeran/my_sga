<?php
/* @var $this ProgramasController */
/* @var $model Programas */

$this->breadcrumbs=array(
	'Programases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Programas', 'url'=>array('index')),
	array('label'=>'Crear Programas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#programas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Programas</h1>

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
	'id'=>'programas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'titulo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
