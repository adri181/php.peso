<?php
    
    $altura = $_GET["altura"];
    $sexo = $_GET["sexo"];

    if ($sexo === 'M') 
    {
        $pesoIdeal = (72.7 * $altura) - 58;
    } 

    elseif ($sexo === 'F') 
    {
        $pesoIdeal = (62.1 * $altura) - 44.7;
    } 
    
    else 
    {
        echo "Sexo inválido";
        exit;
    }

    echo "O peso ideal é: " . $pesoIdeal . " kg";

    ?>