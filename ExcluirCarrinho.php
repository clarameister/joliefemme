<?php

include("conecta.php");

$idcarrinho = $_GET["idcarrinho"];

$comando = $pdo-> prepare("DELETE FROM carrinho WHERE idcarrinho = $idcarrinho");
$comando->execute();

header("Location:carrinho.php");

?>
