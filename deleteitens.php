<?php

include("conecta.php");

$nome_prod = $_GET["nome_prod"];

$comando = $pdo-> prepare("DELETE FROM produto WHERE nome_prod = :nome_prod");
$comando->execute();

header("Location:inicial.php");

?>