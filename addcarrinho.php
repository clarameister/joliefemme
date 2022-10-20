<?php

session_start();
include("conecta.php");

$qtd_produto = $_POST['qtd_produto'];
$total_itens = $_POST['total_itens'];
$carrinho_idcarrinho = $_POST['carrinho_idcarrinho'];
$id_produto = $_POST['id_produto'];

$comando = $pdo->prepare("SELECT qtd_produto, total_itens, carrinho_idcarrinho,  id_produto FROM itens_carrinho");

$comando->execute();

?>