<?php

include("conecta.php");

$comando = $pdo->prepare("SELECT id_produto,nome_produto, preco, imagem FROM produto");

$comando->execute();

if($comando->rowCount() >= 1){
    $lista_produtos = $comando->fetchAll();
}else{
    echo ('Nenhum produto cadastrado!');
}

unset($comando);
unset($pdo);

?>