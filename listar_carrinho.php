<?php

include("conecta.php"); 

$comando = $pdo-> prepare("SELECT idcarrinho,id_cliente,nome_produto,id_produto,SUM(quantidade_prod) AS quantidade,SUM(total_carrinho) as total FROM carrinho WHERE id_cliente=$id_cliente GROUP BY id_produto");
$comando->execute();

unset($comando);
unset($pdo);
?>