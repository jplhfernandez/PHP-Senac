<?php
    class Calculadora
    {
 
    public function somar($n1,$n2)
    {
        echo "A soma de $n1 e $n2 é:".$n1+$n2;
        echo "<hr>";
    }
   
    public function subtrair($n1,$n2)
    {
        echo "A subtração de $n1 e $n2 é:".$n1-$n2;
        echo "<hr>";
    }
 
    public function dividir($n1,$n2)
    {
        echo "A divisão de $n1 e $n2 é:".$n1/$n2;
        echo "<hr>";
    }
 
    public function multiplicacao($n1,$n2)
    {
        echo "A multiplicação de $n1 e $n2 é:".$n1*$n2;
        echo "<hr>";
    }
   
}
$calculadora = new Calculadora();
$calculadora -> somar(4,5);
$calculadora -> subtrair(47,25);
$calculadora -> dividir(16,4);
$calculadora -> multiplicacao(21,45);
 
?>