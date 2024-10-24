<?php 

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilo.css">
    <title>Chuleta Quente Churrascaria</title>
</head>

<body class="fundofixo">
    <!-- area de menu -->
    <?php include 'view/client/ViewMenuPublico.php'; ?>
    <a name="home">&nbsp;</a>
    <main class="container">
        <!-- area de carousel -->
        <?php include 'view/client/ViewCarousel.php'; ?>
        <!-- area de destaque -->
        <a class="pt-6" name="destaques">&nbsp;</a>
        <?php include 'view/client/ViewProdutoDestaque.php'; ?>
        <!-- area geral de produtos -->
        <a class="pt-6" name="produtos" >&nbsp;</a>
        <?php include 'view/client/ViewProdutoGeral.php'; ?>
        <!-- rodapé -->
        <footer class="panel-footer" style="background: none;">
            <?php include 'view/client/ViewRodape.php'; ?> 
            <a name="contato"></a>
        </footer>

    </main>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).on('ready', function(){
        $(".regular").slick({
            dots:true,
            infinity:true,
            slidesToShow:3,
            slidesToScroll:3 
        });
        
    });
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick.min.js"></script>
</html>
