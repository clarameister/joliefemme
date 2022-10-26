<?php


include("conecta.php");

$id_produto = $_GET['id_produto'];
$quantidade_prod = $_GET['quantidade_prod'];
$total_carrinho = $_GET['total_carrinho'];
$id_cliente = $_GET['id_cliente'];


echo("INSERT INTO carrinho VALUES($id_cliente,$id_produto,$quantidade_prod,$total_carrinho)");

$comando = $pdo->prepare("INSERT INTO carrinho(id_cliente,id_produto,quantidade_prod,total_carrinho) VALUES(:c,:id,:q,:t)");
$comando->bindValue(":c", $id_cliente);
$comando->bindValue(":id", $id_produto);
$comando->bindValue(":q", $quantidade_prod);
$comando->bindValue(":t", $total_carrinho);
$comando->execute();

?>
<script>
alert("PRODUTO INSERIDO NO CARRINHO");
window.close();
</script>