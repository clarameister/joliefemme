<?php

<<<<<<< Updated upstream
include("conecta.php"); 
=======
include("conecta.php");

$comando = $pdo->prepare("SELECT nome_prod, preco, imagem FROM produto");
>>>>>>> Stashed changes

$comando = $pdo->prepare("SELECT * FROM produto");
$comando->execute();

<<<<<<< Updated upstream
if($comando->rowCount() >= 1){
    $lista_produtos = $comando->fetchAll();
}else{
    echo 'Nenhum produto cadastrado!';
}

unset($comando);
unset($pdo);
=======
<<<<<<< HEAD
=======
if($comando->rowCount() >= 1)
    {
        $lista_produtos = $comando->fetchAll();
    }else{
        echo("Não há produtos cadastrados.");
    }
    unset($comando);
    unset($pdo);

>>>>>>> f050ee77960ef5acd485f6be52d3a0134cc73551
>>>>>>> Stashed changes
?>