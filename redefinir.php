<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redefinir senha</title>
    <style>
    body{
        background-color: #F1D4D4;
    }
    .titulo{
        color: #874C4C;
        font-size: 30px;
        display: flex;
        align-items: center;
        flex-direction: column;
        margin-top: 60px;
    }
    .campos{
        margin-left: 660px;
        margin-top: 80px;
    }
    input[type=text]{
        border-color: #874C4C;
        background-color: white;
        border-radius: 15px;
        border-width: 2px;
        border-style: solid;
        width: 259px;
        height: 25px;
        margin-top: 5px;
    }
    input[type=submit]{
        border-color: #874C4C;
        background-color: #874C4C;
        border-radius: 15px;
        border-width: 2px;
        width: 259px;
        height: 25px;
        color: white;
        margin-top: 20px;
    }
    </style>
</head>
<body>
    <div class="titulo">
        Redefina sua senha:
    </div>
    <div class="campos">
        <form action="redefinir.php" method="POST">
        <input type="text" placeholder="Senha atual"><br>
        <input type="text" placeholder="Nova senha"><br>
        <input type="submit" value="Redefinir">
    </div>
</body>

<?php
session_start();
include("conecta.php");
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$senha = $_POST["senha"];
$idcliente = $_POST["idcliente"]
$comando = $pdo -> prepare("UPDATE cliente SET senha = $senha WHERE idcliente = $idcliente ");
$comando->bindValue(":senha", $senha);
$comando->bindValue(":idcliente", $idcliente);

header("Location:login.html");
unset($comando);
unset($pdo);    
?>
 
</html>