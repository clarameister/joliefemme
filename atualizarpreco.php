<?php
    include("conecta.php");


    $nome_prod = $_POST["nome_prod"];
    $preco = $_POST["preco"];

    $comando = $pdo-> prepare("UPDATE produto SET preco = :preco WHERE nome_prod = :nome_prod");

    $comando->bindValue(":nome_prod", $nome_prod);
    $comando->bindValue(":preco", $preco);
    $comando->execute();

    header("location:inicial.php");
    unset($comando);
    unset($pdo);
?>