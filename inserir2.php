<?php
include("conecta.php");
$data = $_POST["data"];
$hora = $_POST["hora"];
$consultora = $_POST["consultora"];


$comando = $pdo->prepare("INSERT INTO consultoria(data,hora,consultora) VALUES(:data,:hora,:consultora)");
$comando->bindValue(":data", $data);
$comando->bindValue(":hora", $hora);
$comando->bindValue(":consultora", $consultora);
$comando->execute();

echo ("dado gravados");