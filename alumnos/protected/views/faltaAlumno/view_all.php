<?php
/* @var $this ApartadoMateriaNotaController */
/* @var $model ApartadoMateriaNota */

$this->breadcrumbs = array(
    'Faltas Alumnos' => array('index')
);

$this->menu = array(
    array('label' => 'Ver Faltas', 'url' => array('')),
);
?>

<h1>Ver Faltas por curso</h1>
<br>
<?php
foreach ($cursos as $curso) {
    echo '<li>' . CHtml::link($curso->nombre, array('faltaAlumno/view_faltas&id=' . $curso->cursoid)) . '</li>';
}
?>




