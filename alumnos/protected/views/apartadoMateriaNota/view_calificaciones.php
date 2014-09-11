<?php
/* @var $this ApartadoMateriaNotaController */
/* @var $model ApartadoMateriaNota */

$this->breadcrumbs = array(
    'Apartado Materia Notas' => array('index')
);

$this->menu = array(
    array('label' => 'Ver calificaciones', 'url' => array('viewall')),
);
?>

<h1>Ver calificaciones por materia</h1>
<br>
<?php
if (count($materias) == 0){
   echo "El curso actual no tiene cargadas materias<br><br>";
   echo CHtml::link("Volver al listado", array('apartadoMateriaNota/viewall'));
 }
foreach ($materias as $materia) {
    echo '<li>' . CHtml::link($materia->nombre, array('apartadoMateriaNota/view_calificaciones_materia&id=' . $materia->id . '&curso_id='.$curso_id)) . '</li>';
}
?>




