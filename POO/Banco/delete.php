<?php

include('conexao.php');

$delete = "DELETE FROM produtos WHERE id=2";

$retorno = $conexao -> exec($delete);
header("location: select.php");