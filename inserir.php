<?php
include("conecta.php");
echo ("oiiii");
die();
$email = $_POST["email"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$nível_admin = $_POST["nível_admin"];
$id_endereco = $_POST["id_endereco"];


$comando = $pdo->prepare("INSERT INTO clientes(email,nome,senha,cpf,telefone,nível_admin,id_endereco) VALUES(:email,:nome,:senha,:cpf,:telefone,:nível_admin,:id_endereco)");
$comando->bindValue(":email", $email);
$comando->bindValue(":nome", $nome);
$comando->bindValue(":senha", $senha);
$comando->bindValue(":cpf", $cpf);
$comando->bindValue(":telefone", $telefone);
$comando->bindValue(":nível_admin", $nível_admin);
$comando->bindValue(":id_endereco", $id_endereco);
$comando->execute();

echo ("dado gravados");
