<?php
    include("conecta.php");
    $dia = $_POST['dia'];
    $hora = $_POST['hora'];

    $comando = $pdo->prepare("INSERT INTO consultoria(dia, hora) VALUES(:dia, :hora)");
    $comando->bindValue(":dia", $dia);
    $comando->bindValue(":hora", $hora);
    $comando->execute();

    header("Location:inicial.html");
    //echo ("Consultoria marcada!");

    unset($comando);
    unset($pdo);
?>
