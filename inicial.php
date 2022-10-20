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
</style>
<body>
    <?php
        session_start();
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
                <img src="carrinho.png" onclick="abrir_pagina('carrinho.html')" class="carrinho" width="50px" onclick="abrir_pagina('/*depende do que a pessoa pesquisar*/ ')">
                <img src="icone-perfil.png" onclick="abrir_pagina('perfil.php')" class="icone" width="50px" onclick="abrir_pagina('/*depende do que a pessoa pesquisar*/ ')">
            </div>
    </div>

    <div class="retangulo2">
        &nbsp;<div>BLUSAS</div> <div>VESTIDOS</div> <div>SAIAS</div> <div>SHORTS</div> <div>CALÇAS</div> <div>CASACOS</div> <div>SAPATOS</div> <div>BOLSAS</div>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div>
            <a href="consultoria.html" class="link"> MARCAR UMA CONSULTA DE MODA </a>
        </div>

        <input id="searchbar" onkeyup="search_items()" type="text" name="search" placeholder="Pesquisar..">

        <img src="lupa.png" class="lupa">&nbsp;
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
                    <td class="td"> <?php echo '<img height="90px" width="90px" src="' .$linha['imagem']. '">'; ?> </td>
                    <td class="td"> <?php echo $linha['nome_prod']; ?></td>
                    <td class="td"> <?php echo $linha['preco']; ?></td>
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
            <img src="bolsa.png" class="bolsa">

        <div class="frases">
                ESTÁ EM DÚVIDA SOBRE O QUE COMPRAR?
        </div>
        <div class="frases">
                <a href="consultoria.html" class="link"> MARQUE UMA CONSULTA DE MODA! </a>
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
var variaveis = new URLSearchParams(location.search);
var usuario = variaveis.get("usuario");
console.log(usuario)

    function abrir_pagina(arquivo)
{
    window.open(arquivo+"?usuario="+usuario,"_self")
}
    </script>
</html>