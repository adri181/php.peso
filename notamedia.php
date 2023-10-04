<?php
    
    $media1 = $_GET["media1"];
    $media2 = $_GET["media2"];
    $media3 = $_GET["media3"];
    $media4 = $_GET["media4"];

    $notamedia = ($media1 + $media2 + $media3 + $media4) / 4;

    if ($media >= 5) 
    {
        echo "Aluno aprovado com nota média " . $notamedia;
    } 
    
    else 
    {
        echo "Aluno reprovado com nota média " . $notamedia;
    }

    ?>