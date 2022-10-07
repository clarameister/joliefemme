<?php
include("conecta.php");
$dia = $_POST["dia"];
$hora = $_POST["hora"];

$comando = $pdo-> prepare("INSERT INTO consultoria(data,hora) VALUES(:data,:hora)");
$comando->bindValue(":dia", $dia);
$comando->bindValue(":hora", $hora);
$comando->execute();

echo ("consulta marcada");