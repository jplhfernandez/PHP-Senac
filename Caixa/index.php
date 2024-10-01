<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
   //
        //Atribuição de Informações á Matriz e Váriaveis.
       // $usuario = array ("jose", "carlos", "marcela", "maria", "laura"); //Referente ao nome de usuario.
       // $senha = array (111, 222, 333, 444, 555); //Referente a senha do usuário.
       // $saldo = array (1000, 2000, 3000, 4000, 5000);
      //  $tentativa = 1; //Referente ao número de tentativas de login.

        //Onde o usuário irá efetuar login através de seu nome de usuário e senha, possuindo somente três tentativas para isso.
      //  if ($_POST["usuario"] == $usuario and $_POST["senha"] == $senha){ //Se o usuario e senha forem compativeis com as informações da matriz.
      //      header("location: conta.php"); //Se as informações de login estiverem corretas, 
            //ao clicar no botão o usuário será levado a tela de conta.
      //  } 
      //  else
      //  {
      //      echo "<script>alert('Email ou senha incorretos. Tente novamente.');</script>"; //Se as informações estiverem incorretas, 
      //     //irá aparecer esse alerta. Número de tentativas será reduzido a cada tentativa.            
       // }

    <?php
    $usuario = "lucas";
    $senha = "123";
    $i = 1;
   
    while ($i < 3)
    {
 
        if ($_POST["usuario"] == $usuario and $_POST["senha"] == $senha)
        {
            header("location: loginSucesso.php");
        }
 
    else
    {
        header("location: form.php");
        print "<script>alert('Dados incorretos!');</script>";
       
 
    }
        $i++;
        break;
    }
?>       