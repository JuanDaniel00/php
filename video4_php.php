<?php
    //arrays
    $asociativo = array(
        'Maria' => 16,
        'Pedro' => 29,
        'Maria' => 16
    );
    
    $asociativo['Ivan'] = 100;

    echo "<pre>". "<br/>";
    var_dump($asociativo);

    //arrays
    $nu1 = array(9, 4, 7);
    $nu2 = array(6, 4, 1);
    $nu3 = array(3, 5, 2);

    $final = array_merge($nu1, $nu2, $nu3);
    arsort($final);

    echo "<pre>". "<br/>";
    var_dump($final);
?>