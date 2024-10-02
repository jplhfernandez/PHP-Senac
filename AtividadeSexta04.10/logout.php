<?php
session_start();
require 'Usuario.php';

Usuario::logout();
header('Location: index.php');
exit;
