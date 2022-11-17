-<?php
include("conecta.php");

$comando = $pdo->prepare("SELECT * FROM consultoras ");

$comando->execute();

if($comando->rowCount() >= 1)
{
    $lista_consultoras = $comando->fetch();
}else{
    echo("Não deu certo!");
}

  unset($comando);
  unset($pdo);

?>