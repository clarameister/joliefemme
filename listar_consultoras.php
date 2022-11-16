<?php
include("conecta.php");

$comando = $pdo->prepare("SELECT id_consultora,nome_cons,email_cons,telefone_cons FROM consultoras ");

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
