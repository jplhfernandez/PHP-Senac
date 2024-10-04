<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login - Centro de Estética Popular</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo('../assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?php echo('assets/vendor/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo('assets/dist/css/sb-admin-2.css') ?>" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?php echo('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php if (isset($mensagem) && !empty($mensagem)){ ?>
                    <div class="col-md-4 col-md-offset-4">
                        <img src="../imagens/logo.png">
                    </div>
                <?php }else{ ?>
                    <div class="col-md-4 col-md-offset-4">
                        <img src="imagens/logo.png">
                    </div>
                <?php } ?>

                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Login</h3>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url('Login/logar') ?>" method="post">
                                <?php if (isset($mensagem) && !empty($mensagem)){ ?>
                                <div class="alert alert-danger">
                                    <?php print($mensagem) ?>
                                </div>
                                <?php } ?>
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="Email" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Senha" name="Senha" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <a href="<?php echo base_url("Usuario/recuperar") ?>" title="Esqueceu senha?">Esqueceu senha?</a>
                                        </label>
                                    </div>

                                    <button type="submit" class="btn btn-lg btn-success btn-block">Enviar</button>
                                </fieldset>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="../vendor/metisMenu/metisMenu.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>
    </body>
</html>