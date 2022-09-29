<?php
include("conecta.php");
$email = $_POST["email"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$cidade= $_POST["cidade"];
$estado= $_POST["estado"];
$rua= $_POST["rua"];
$bairro= $_POST["bairro"];
$nivel_admin= 0;



$comando = $pdo->prepare("INSERT INTO clientes(email,nome,senha,cpf,telefone,cidade,estado,rua,bairro, nivel_admin) VALUES(:email,:nome,:senha,:cpf,:telefone,:cidade,:estado,:rua,:bairro,:nivel_admin)");
$comando->bindValue(":email", $email);
$comando->bindValue(":nome", $nome);
$comando->bindValue(":senha", $senha);
$comando->bindValue(":cpf", $cpf);
$comando->bindValue(":telefone", $telefone);
$comando->bindValue(":cidade", $cidade);
$comando->bindValue(":estado", $estado);
$comando->bindValue(":rua", $rua);
$comando->bindValue(":bairro", $bairro);
$comando->bindValue(":nivel_admin", $nivel_admin);
$comando->execute();

echo ("dado gravados");
