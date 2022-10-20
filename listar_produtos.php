<?php

include("conecta.php");

$nome_prod = $_POST['nome_prod'];
$preco = $_POST['preco'];
$imagem=$_FILES['meu_upload']; 

$comando = $pdo->prepare("SELECT nome_prod, preco, imagem FROM produto");

$comando->execute();

?>