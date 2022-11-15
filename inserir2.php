<?php
    session_start();
    include("conecta.php");
    $id_consultora = $_POST['id_consultora'];
    $dia = $_POST['dia'];
    $hora = $_POST['hora'];
    $id_clientes = $_SESSION['idcliente'];

    $comando = $pdo->prepare("INSERT INTO consultoria(id_consultora,dia,hora,id_clientes) VALUES(:id_consultora,:dia,:hora,:id_clientes)");
    $comando->bindValue(":id_consultora", $id_consultora);
    $comando->bindValue(":dia", $dia);
    $comando->bindValue(":hora", $hora);
    $comando->bindValue(":id_clientes", $_SESSION['idcliente']);
    $comando->execute();

    header("Location:inicial.php");

    unset($comando);
    unset($pdo);
?>

<script>
    alert("CONSULTORIA MARCADA!");
</script>
