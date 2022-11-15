<?php
include("conecta.php");

$comando = $pdo->prepare("SELECT nome, email, telefone FROM consultoras WHERE id_consultora = :id_consultora");

$comando->execute();

  
if($comando->rowCount() >= 1)
{
    $usuario = $comando->fetch();
}else{
    echo("Não deu certo!");
}

  unset($comando);
  unset($pdo);

?>
