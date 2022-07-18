<?php
    //CICLO FOREACH
    $alumnos = array( 'juan' => '23', 'pedro' => '25', 'maria' => '22');

    foreach ($alumnos as $array_nuevo => $edad) {
        echo $array_nuevo. " tiene " . $edad . " años ". "<br/>";
    }
?>