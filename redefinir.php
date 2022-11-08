<?php

include("conecta.php");

$senha = $_POST["senha"];
$idcliente = $_POST["idcliente"]

$comando = $pdo -> prepare("UPDATE cliente SET senha = '$senha' WHERE idcliente ='$idcliente'");

$comando->bindValue(":senha", $senha);
$comando->bindValue(":idcliente", $idcliente);

header("Location:login.html");
unset($comando);
unset($pdo);    
?>