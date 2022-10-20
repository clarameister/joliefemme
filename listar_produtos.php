<?php

include("conecta.php");

$comando = $pdo->prepare("SELECT nome_prod, preco, imagem FROM produto");

$comando->execute();

if($comando->rowCount() >= 1)
    {
        $lista_produtos = $comando->fetchAll();
    }else{
        echo("Não há produtos cadastrados.");
    }
    unset($comando);
    unset($pdo);

?>