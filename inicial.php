<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Início </title>
    <link rel="stylesheet" href="estiloinicial.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
.link
{

    color: white;
} 
.bolsa
{
    width: 200px;
}
.th
{
    color: rgb(181, 119, 119);
}
.td
{
    font-size: 20px;
    width: 347px;
    height: 100px;
    color: rgb(135, 76, 76);;
}
.table 
{
    margin-left: 211px;
    
}

body{
    background-color: rgb(241,212,212);
    display: flex;
    flex-direction: column;
    align-items: center;
    width:100%;
    height:100vh;
    margin:0%;
}
.retangulo1
{
    height: 70px;  
    width: 100%; 
    background-color: rgb(211, 153, 153, 1);
    display: flex;
    align-items: center;
    justify-content: space-between;
}
#nome
{
    font-size: 30px;
    color: white;
    display: flex;
    position: absolute;
    margin-left: 590px;
}
.conteudo1
{
    width: 100%;
    display: flex;
    text-align: center;
    align-content: center;
    align-items: center;
    justify-content:space-between;
    justify-items: center;
}
.icone_carrinho
{
    background-color: rgb(211, 153, 153, 1);
    width: 10%;
    height: 70px;
}
.logotipo
{ 
    width: 100px;
    height: 100px;
}
.carrinho
{
    position: absolute;
    margin-top: 9px;
    margin-left: -5px;
}
.icone
{
    position: absolute;
    margin-top: 9px;
    margin-left: -67px;
}
.retangulo2
{
    width: 100%;
    height: 58px;
    background-color: rgb(181, 119, 119);
    color: white;
    font-size: 20px;
    display: flex;
    text-align: center;
    align-content: center;
    align-items: center;
    justify-content:center;
    justify-items: center;
}
.conteudo2
{
    width:100%;
    height: 900px;
    display: flex;
    flex-direction: row;
    justify-items: center;
}
.divpromocao
{
    background-color: rgb(254, 234, 234);
    width: 70%;
    height: 80%;
    margin-top: 20px;
    margin-left: 40px;
    display: flex;
    flex-direction: column;
    align-content: center;
    align-items: center;
    justify-content:center;
    justify-items: center; 
    z-index: 1;
}
.consul
{
    background-color: rgb(254,234,234);
    width:18%;
    height: 80%;
    margin-top: 20px;
    margin-left: 30px;

}
.escuro
{
    background-color: rgb(181, 119, 119);
    margin: 20px;
    height: 90%;
    display: flex;
    flex-direction: column;
    align-content: center;
    align-items: center;
}
.frases
{
    width: 90%;
    margin-top: 30px;
    color: white;
}
input 
{
    border-color: white;
    border-radius: 15px;
}
button
{
    color: #874C4C;
    border-color: #874C4C;
    border-radius: 5px;
    border-style: solid;
    border-width: 1px;
}
a:link
{
    text-decoration: none;
    color: white;
}
</style>
<body>
    <?php
        session_start();
        $usuario =  $_SESSION['idcliente'];
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            header("location: login.html");
            exit;
        }
    ?>
    <div class="conteudo1"> 
            <div class="retangulo1">
                <img src="logotipo.png" class="logotipo" ><div id="nome"> JOLIE FEMME </div>
            </div>
            <div class="icone_carrinho">
                <img src="carrinho.png" onclick="abrir_pagina('carrinho.php')" class="carrinho" width="50px" onclick="abrir_pagina('/*depende do que a pessoa pesquisar*/ ')">
                <img src="icone-perfil.png" onclick="abrir_pagina('perfil.php')" class="icone" width="50px" onclick="abrir_pagina('/*depende do que a pessoa pesquisar*/ ')">
            </div>
    </div>

    <div class="retangulo2">
        
        <div id="cons">
            <a href="consultoria.html" class="link"> MARCAR UMA CONSULTA DE MODA </a>
        </div>

    </div>
       
    <div class="conteudo2">
        <div class="divpromocao">
    <table class="table">
        <tbody>
            <?php
            include("listar_produtos.php");
            
            if (!empty($lista_produtos)) {
              
                foreach ($lista_produtos as $linha) {?>
                    <tr class="tr">
                    <td class="td"> <?php echo '<img height="90px" width="90px" src="' .$linha['imagem']. '">'; ?>  </td>
                    <td class="td"> <?php echo $linha['nome_prod']; ?>  </td>
                    <td class="td"> <?php echo $linha['preco']; ?> <button onclick="InserirCarrinho('<?php echo($linha['idproduto']); ?>',1,'<?php echo($linha['preco']); ?>',<?php echo($_SESSION['idcliente']);  ?>,'<?php echo($linha['nome_prod']); ?>');">+</button> </td>
                    </tr>
                <?php }
            }
            ?>
        </tbody>
    </table>
        </div>
    <div class="consul">
        <div class="escuro">
            <br>
            <img src="novidades.png" class="bolsa">
        <div class="frases">
                ESTÁ EM DÚVIDA SOBRE O QUE COMPRAR?
        </div>
        <div class="frases">
                <a href="consultoria.php" class="link"> MARQUE UMA CONSULTA DE MODA! </a>
        </div>
        <div class="frases">
                POR APENAS R$50,00 + FRETE
        </div>
    </div>
    </div>
    </div>
</body>
<script src="jquery.js"></script>
<script>
function abrir_pagina(arquivo)
{
    window.open(arquivo+"?usuario=<?php echo($usuario);?>","_self");
}
function InserirCarrinho(idproduto,qtde,preco,idcliente,nome_produto)
{
    var url = "addcarrinho.php?id_produto="+idproduto+"&quantidade_prod="+qtde+"&total_carrinho="+preco+"&id_cliente="+idcliente+"&nome_produto="+nome_produto;
    window.open(url,"_blank");
}
    </script>
</html>