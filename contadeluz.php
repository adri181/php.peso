<?php

    $contadeluz = $_GET["resultadodacompra"];

    if ($contadeluz > 50.00) 
    {
        echo "Você está gastando muito";
    } 
    
    else 
    {
        echo "Seu gasto foi normal";
    }

?>