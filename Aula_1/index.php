<?php
    // echo exibe algo para o usuário
    echo "Olá Mundo!";
    echo "<br>";
    //$ para indicar variavel
    $x = 43243;
    echo "<br>";
    echo "##########################";
    echo $x;
    // Dentro do PHP pode usar HTML, tem que ser com echo e entre "".
?>

<br>

<?php
    echo $x;
    echo "<br>";
    $x = "13";
    var_dump($x);
    echo "<br>";
    var_dump(["João", "Pedro", 432]);
    // o que é exibido no var_dump não pode ser utilizado novamente, só exibe.
    
    echo "<br>";

    //duas maneiras de fazer vetores no php
    $vet_ex1 = ["João", "Pedro", 432];
    echo $vet_ex1[0];
    // o sistema percebe que se trata de um array por conta das chaves []

    echo "<br>";
    
    // a outra maneira
    $vet_ex2 = array("João", "Pedro", 432);
    echo $vet_ex2[1];
    // declara explicitamente que é uma array, usa parenteses ()
    
    echo "<br>";
    
    //constantes
    define("nome", "João Pedro");
    echo nome;
    
    echo "<br>";
    
    const segundo_nome = "Pedro";
    echo segundo_nome;
   
    echo "<br>";

    $valor = 70;
    if ($valor < 50) 
    {
        echo "O valor é menor que 50, o valor é de $valor reais";
    }
    else if ($valor > 50)
    {
        echo "O valor é maior que 50, o meu valor é de $valor reais";
    }
    else
    {  
        echo "O valor é igual a 50";
    }
?>