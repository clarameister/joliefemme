<!DOCTYPE html>
<html>

<head>
        <meta charset="UTF-8">
        <title>Carrinho</title>
        <link rel="stylesheet" href="estilocarrinho.css">
</head>
<style>
body
{
    background-color: rgb(241,212,212);
    display: flex;
    flex-direction: column;
    align-items: center;
    width:100%;
    height:100vh;
    margin:0%;
    overflow: hidden;
}
.retangulo1
{
    background-color: rgb(211,153, 153);
    width: 100%;
    height: 65px;
    display: flex;
    align-items: flex-start;
    align-content: flex-start;
    justify-content: flex-start;
    justify-items: flex-start;
}
.sair
{
    background-color:rgb(222, 150, 150);
    width: 100px;
    margin-top: -40px;
    margin-left: 1000px;
}
.frase
{
    color: rgb(135,76,76);
    font-size: 25px;
    position: absolute;
    margin-top: 17px;
    margin-left: 125px;
}
#meu_upload
{
    display: none;
}
#imagem
{
    position: absolute;
    margin-top: 7px;
    margin-left: 61px;
}
.voltar
{
    position: absolute;
    margin-left: -740px;
    margin-top: 16px;
}
#car
{
    color:#874C4C;
    width: 129px;
    height: 30px;
    margin-top: 220px;
    margin-left: -1542px;
}
table
{
    margin-top: 50px;
    border-color: #874C4C;
    border-style: solid;
    border-width: 2px;
    color: #874C4C;
    background-color: #FFF0F5;
    font-size: 18px;
}
button
{
    color: #874C4C;
    border-color: #874C4C;
    border-radius: 5px;
    border-style: solid;
    border-width: 1px;
    background-color: white;
}
.voltar
{
    width: 40px;
    height: 40px;
    margin-top: 13px;
    margin-left: 11px;
}
</style>

<?php
session_start();
$id_cliente = $_SESSION['idcliente'];
include("listar_carrinho.php"); 
?>

<body>
        <div class="retangulo1">
        <a href="inicial.php"><img src="chevron.png" class="voltar"></a>
                <img onclick="busca_imagem();" id="imagem" src="pessoas.png" width="50px">
                <input type="file" id="meu_upload">
                <div class="frase"> Oi!! Esse é o seu carrinho.</div>
        </div>
        

<table width="80%" border="1">
    <tr>

        <td> Id Produto</td>
        <td> Nome Produto</td>
        <td> Quantidade</td>
        <td> Total (R$)</td>

    </tr>

<?php

if (!empty($lista_produtos)) {
              
    foreach ($lista_produtos as $linha) {?>
        <tr class="tr">
        <td class="td"> <?php echo($linha['id_produto']);?> </td>
        <td class="td"> <?php echo($linha['nome_produto']);?> </td>
        <td class="td"> <?php echo($linha['quantidade']);?> </td>
        <td class="td"> <?php echo($linha['total']);?> <button class="excluir" onclick="ExcluirCarrinho(<?php echo($linha['idcarrinho']); ?>);">X</button></td> 
        </tr>
    <?php }
}
?>   
</table>   
</body>
<script src="jquery.js"></script>
<script>
var variaveis = new URLSearchParams(location.search);
var usuario = variaveis.get("usuario");
console.log(usuario)

    function abrir_pagina(arquivo)
{
    window.open(arquivo+"?usuario="+usuario,"_self")
}

function ExcluirCarrinho(id)
{
    var url = "ExcluirCarrinho.php?idcarrinho="+id;
    window.open(url,"_blank");
}
    </script>
</html>