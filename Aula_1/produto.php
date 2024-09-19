<?php
session_start();
if ($_POST["produto"] != "" and $_POST["valor"] != ""){
    $_SESSION['produtos'] = $_SESSION['produtos']."\n".$_POST["produto"];

    $_SESSION['total'] = $_SESSION['total'] + $_POST["valor"];
}

header("location: boasvindas.php")
?>