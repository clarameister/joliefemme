<?php

include("conecta.php");

$id_produto = $_GET['id_produto'];
$quantidade_prod = $_GET['quantidade_prod'];
$total_carrinho = $_GET['total_carrinho'];
$id_cliente = $_GET['id_cliente'];
$nome_produto = $_GET['nome_produto'];


$comando = $pdo->prepare("INSERT INTO carrinho(id_cliente,id_produto,quantidade_prod,total_carrinho,nome_produto) VALUES(:c,:id,:q,:t,:n)");
$comando->bindValue(":c", $id_cliente);
$comando->bindValue(":id", $id_produto);
$comando->bindValue(":q", $quantidade_prod);
$comando->bindValue(":t", $total_carrinho);
$comando->bindValue(":n", $nome_produto);
$comando->execute();

?>
<script>

window.close();
</script>