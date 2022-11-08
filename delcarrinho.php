<?php
    include("conexao.php");
    $codigo = $_GET['codigo'];
    $idcarrinho = $_GET['idcarrinho'];
    
    $comando = $pdo->("DELETE FROM carrinho WHERE idcarrinho = :idcarrinho AND id_produto = :codigo");

   //$comando->bindValue(':codigo',$codigo);
    
    $comando->execute();

    header("location:inicial.php");

    unset($comando);
    unset($pdo);
?>
