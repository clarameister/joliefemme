<?php
    include("conexao.php");
    $codigo = $_GET['codigo'];
    $idcarrinho = $_GET['idcarrinho'];
    
    //comando sql.
    $comando = $pdo->("DELETE FROM carrinho WHERE idcarrinho = :$idcarrinho AND id_produto = :$codigo");

    //insere valores das variaveis no comando sql.
   //$comando->bindValue(':codigo',$codigo);
    
    //executa a consulta no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("location:inicial.php");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>
