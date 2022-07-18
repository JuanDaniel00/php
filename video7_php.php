<?php 
    //estructuras Switch
    $curso = "php";
    switch ($curso) {
        case 'php':
            echo "Curso de PHP";
            break;
        case 'js':
            echo "Curso de JS";
            break;
        case 'html':
            echo "Curso de HTML";
            break;
        default:
            echo "Curso no encontrado";
            break;
    }
?>