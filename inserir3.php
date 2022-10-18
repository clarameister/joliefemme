<?php
 
include("conecta.php");

$nome_prod = $_POST['nome_prod'];
$preco = $_POST['preco'];
$imagem=$_FILES['meu_upload']; 
$extensao = $imagem['type'];
$conteudo = file_get_contents($imagem["tmp_name"]);
$base64 = "data:".$extensao.";base64,".base64_encode($conteudo);

$comando=$pdo->prepare("INSERT INTO produto(nome_prod,preco,imagem) VALUES (:nome_prod,:preco,:conteudo)");

$comando->bindValue(":nome_prod",$nome_prod);
$comando->bindValue("preco",$preco);
$comando->bindValue(":conteudo", $base64);
$comando->execute();

header("Location:inicial.php");
unset($comando);
unset($pdo);