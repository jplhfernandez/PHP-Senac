
<nav class="nav navbar-inverse">
    <div class="container-fluid">
        <!-- Agrupamento para exibição Mobile -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar" aria-expanded="false">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="../../index.php" class="navbar-brand">
                <img src="../../public/images/logo-chuleta.png" alt="">
            </a>
        </div>
        <!-- Fecha Agrupamento para exibição Mobile -->
        <!-- nav direita -->
        <div class="collapse navbar-collapse" id="defaultNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <button type="button" class="btn btn-danger navbar-btn disabled" style="cursor: default;">
                        Olá, <!-- USUÁRIO -->!
                    </button>
                </li>
                <li class="active"><a href="index.php">ADMIN</a></li>
                <li><a href="ViewListaProduto.php">PRODUTOS</a></li>
                <li><a href="ViewListaTipo.php">TIPOS</a></li>
                <li><a href="ViewListaUsuario.php">USUÁRIOS</a></li>
                <li class="active">
                    <a href="../../index.php">
                        <span class="glyphicon glyphicon-home"></span>
                    </a>
                </li>
                <li>
                    <a href="../../controller/ControllerLogout.php">
                        <span class="glyphicon glyphicon-log-out"></span>
                    </a>
                </li>
            </ul>
        </div><!-- fecha collapse navbar-collapse -->
        <!-- Fecha nav direita -->

    </div><!-- fecha container-fluid -->
</nav>