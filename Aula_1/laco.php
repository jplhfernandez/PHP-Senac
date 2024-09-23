<?php
    $i = 1;
    while ($i <= 10) 
    {
        if ($i % 2 == 0) {
            echo "O número ". $i ." é par";
        }
        echo "<br>";
        $i++;
    }

    echo "<br>";
    
    $x = 1;
    do {
        echo $x;
        echo "<br>";
        $x++;
    } while ($x < 6);
    
    echo "<br>";
    
    $y = 0;
    do {
        $y++;
        if ($y == 3) continue;
        echo $y;
        echo "<br>";
    } while ($y < 6);
    
    echo "<br>";
    
    for ($i=0; $i < 10; $i++) { 
        echo "O valor do número é: $i";
        echo "<br>";
    }
    
    echo "<br>";
    
    $cores = array("vermelho", "verde", "azul", "amarelo");
    foreach ($cores as $cor) {
        echo "$cor <br>";
    }

    echo "<br>";
    
    $membros = array("Edson"=>"61", "Gislene"=>"55", "João"=>"18");
    foreach ($membros as $nome => $idade) {
        echo "$nome : $idade <br>";
    }
    ?>