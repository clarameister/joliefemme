<?php
include("conecta.php");
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$rua= $_POST["rua"];
$numero= $_POST["numero"];
$bairro= $_POST["bairro"];
$cidade= $_POST["cidade"];
$estado= $_POST["estado"];



$comando = $pdo -> prepare("INSERT INTO cliente(nome,senha,cpf,email,telefone,rua,numero,bairro,cidade,estado) VALUES(:nome,:senha,:cpf,:email,:telefone,:rua,:numero,:bairro,:cidade,:estado)");

$comando->bindValue(":nome", $nome);
$comando->bindValue(":senha", $senha);
$comando->bindValue(":cpf", $cpf);
$comando->bindValue(":email", $email);
$comando->bindValue(":telefone", $telefone);
$comando->bindValue(":rua", $rua);
$comando->bindValue(":numero", $numero);
$comando->bindValue(":bairro", $bairro);
$comando->bindValue(":cidade", $cidade);
$comando->bindValue(":estado", $estado);
$comando->execute();

header("Location:login.html");

unset($comando);
unset($pdo);
?>