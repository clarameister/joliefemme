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
    margin-left: -768px;
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
</style>

<?php
session_start();
$id_cliente = $_SESSION['idcliente'];
include("listar_carrinho.php"); 
?>

<body>
        <div class="retangulo1">
                <img onclick="busca_imagem();" id="imagem" src="pesquisar.png" width="50px">
                <input type="file" id="meu_upload">
                <div class="frase"> Oi!! Esse é o seu carrinho</div>
        </div>
        <a href="inicial.php"><img src="seta.png" class="voltar"></a>

<table width="80%" border="1">
    <tr>

    <?php 
       if($_SESSION['nivel_admin']==0)
       {
           
            echo("
            <td>Cód. Compra</td>
            <td>Cód. Cliente</td>
            ");
       }
       ?>

        <td>Cód.Produto</td>
        <td>Nome Produto</td>
        <td>Quantidade</td>
        <td>Total (R$)</td>
    
    </tr>

<?php

if (!empty($lista_produtos)) {
              
    foreach ($lista_produtos as $linha) {?>
        <tr class="tr">

       <?php 
       if($_SESSION['nivel_admin']==0)
       {
            $t1 = $linha["idcarrinho"];   
            $t2=$linha["id_cliente"];
            echo("
                <td class='td'>$t1</td>
                <td class='td'>$t2</td>
            ");
       }
       ?>
        <td class="td"> <?php echo($linha['id_produto']);?> </td>
        <td class="td"> <?php echo($linha['nome_produto']);?> </td>
        <td class="td"> <?php echo($linha['quantidade']);?> </td>
        <td class="td"> <?php echo($linha['total']);?> </td>
       
        </tr>
    <?php }
}

?>
        
</table>
<script>

</script>

       
</body>
</html>