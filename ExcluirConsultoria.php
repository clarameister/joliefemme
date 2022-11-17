<?php
include("conecta.php");

$idconsultoria = $_GET["idconsultoria"];

$comando = $pdo-> prepare("DELETE FROM consultoria WHERE idconsultoria = $idconsultoria");
$comando->execute();

header("location:consultoria2.php");
?>