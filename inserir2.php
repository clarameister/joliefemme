<?php
    session_start();
    include("conecta.php");
    $dia = $_POST['dia'];
    $hora = $_POST['hora'];
    $_SESSION = $_SESSION['id_clientes'];

    $comando = $pdo->prepare("INSERT INTO consultoria(dia, hora, id_clientes) VALUES(:dia, :hora, :id_clientes)");
    $comando->bindValue(":dia", $dia);
    $comando->bindValue(":hora", $hora);
    $comando->bindValue(":id_clientes", $_SESSION['id_clientes']);
    $comando->execute();

    header("Location:inicial.php");
    echo ("Consultoria marcada!");

    unset($comando);
    unset($pdo);
?>
