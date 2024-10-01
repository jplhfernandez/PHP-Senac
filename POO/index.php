<?php
 class Contas
 {
    public $saldo;
    public $titular;
 
    //Metodo para fazer um saque
    public function sacar($valor)
    {
        echo"<hr>Saque efetuado com o valor:<b> $valor</b></hr>";
        $this->saldo =$this->saldo-$valor;
    }
 
    //Metodo para fazer deposito
    public function depositar($valor)
    {
        echo"<hr> Deposito efetuado com o valor:<b> $valor </b></hr>";
        $this -> saldo = $this -> saldo + $valor;
    }
 
    //Retorna o saldo
    public function verSaldo()
    {
        return $this->saldo;
    }
 }
    $conta1 = new Contas();
    $conta2 = new Contas();
 
    $conta1 -> titular = 'Luciana Souza Lima';
    $conta2 -> titular = 'Aline de Oliveira';
 
    $conta1->depositar(500);
    $conta2->depositar(1000);
   
    echo '<pre>';
    var_dump($conta1);
    echo('<hr>');
    var_dump($conta2);
 
    echo'<hr>';
    echo 'Saldo atual na Conta1:'.$conta1 -> verSaldo();
    echo'<br>';
    echo 'Saldo atual na Conta2:'.$conta2 -> verSaldo();
 
    echo '<hr>';
    $conta1 ->sacar(400);
    $conta2 -> sacar(600);
    echo'<hr>';
    echo 'Titular da Conta1:'.$conta1 -> titular;
    echo'<br>';
    echo 'Titular da Conta2:'.$conta2 -> titular;
 
 
?>
 
 
 