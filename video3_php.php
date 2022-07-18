<?php 
    //arrays
    $numeros[0] = 'uno   ';
    $numeros[1] = 'dos   ';
    $numeros[2] = 3;
    $numeros[3] = 4;

    echo $numeros[1]. "<br/>";
    
    
    $numeros = array(  1,  2,  3,  4,  5);
    echo $numeros[1]. "<br/>";

    //arrays asociativos
    $edad = array(
        'Juan' => '    23',
        'Pedro' => '    25',
        'Maria' => '     22'
    );
    echo "<pre>";
    var_dump($edad);
    echo "</pre>". "<br/>";


    //arrays operaciones
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8];
    $suma = array_sum($numeros);
    
    echo $suma;

?>
