<?php
session_start();
unset($_SESSION['idcliente']);

header("Location: login.html");
?>