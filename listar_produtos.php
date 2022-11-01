<?php

include("conecta.php"); 
<<<<<<< Updated upstream
=======

include("conecta.php");

$comando = $pdo->prepare("SELECT nome_prod, preco, imagem FROM produto");
>>>>>>> Stashed changes

$comando = $pdo->prepare("SELECT * FROM produto");
$comando->execute();

<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
if($comando->rowCount() >= 1){
    $lista_produtos = $comando->fetchAll();
}else{
    echo 'Nenhum produto cadastrado!';
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
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
?>