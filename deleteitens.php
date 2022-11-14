<?php

include("conecta.php");

$nome_prod = $_POST["nome_prod"];

$comando = $pdo->prepare("DELETE FROM produto WHERE nome_prod = $nome_prod");
$comando->execute();

header("Location:inicial.php");

?>
