<?php

include("conecta.php");

session_start();
$idcliente =  $_SESSION['idcliente'];
$senha = $_POST["senhanova"];

$comando = $pdo -> prepare("UPDATE cliente SET senha = :senha WHERE idcliente = :idcliente");

$comando->bindValue(":senha", $senha);
$comando->bindValue(":idcliente", $idcliente);
$comando->execute();

header("Location:login.html");
unset($comando);
unset($pdo);    
?>