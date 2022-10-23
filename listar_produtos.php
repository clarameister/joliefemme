<?php

include("conecta.php"); 

$comando = $pdo->prepare("SELECT nome_prod, preco, imagem FROM produto");
$comando->execute();

?>