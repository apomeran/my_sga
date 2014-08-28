<?php
/* @var $this ApartadoMateriaNotaController */
/* @var $model ApartadoMateriaNota */

$this->breadcrumbs = array(
    'Apartado Materia Notas' => array('index')
);

$this->menu = array(
    array('label' => 'Ver calificaciones', 'url' => array('')),
);
?>

<h1>Ver calificaciones por materia</h1>
<br>
<?php
foreach ($materias as $materia) {
    echo '<li>' . CHtml::link($materia->nombre, array('apartadoMateriaNota/view_calificaciones_materia&id=' . $materia->id . '&curso_id='.$curso_id)) . '</li>';
}
?>




