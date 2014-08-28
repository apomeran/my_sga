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

<h1>Ver calificaciones por curso</h1>
<br>
<?php
foreach ($cursos as $curso) {
    echo '<li>' . CHtml::link($curso->nombre, array('apartadoMateriaNota/view_calificaciones&id=' . $curso->cursoid)) . '</li>';
}
?>




