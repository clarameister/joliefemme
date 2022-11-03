<?php
    include("conexao.php");
    $codigo = $_GET['codigo'];
    
    //comando sql.
    $comando = $pdo->("DELETE FROM carrinho WHERE idcarrinho = :idcarrinho");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':codigo',$codigo);
    
    //executa a consulta no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("location:inicial.php");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>