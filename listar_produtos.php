<?php

include("conecta.php"); 

$comando = $pdo->prepare("SELECT * FROM produto");
$comando->execute();

if($comando->rowCount() >= 1){
    $lista_produtos = $comando->fetchAll();
}else{
    echo ('Nenhum produto cadastrado!');
}

unset($comando);
unset($pdo);


if($comando->rowCount() >= 1)
    {
        $lista_produtos = $comando->fetchAll();
    }else{
        echo("Não há produtos cadastrados.");
    }
    unset($comando);
    unset($pdo);

?>