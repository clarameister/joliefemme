<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Início </title>
    <link rel="stylesheet" href="estiloinicial.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

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
                <img src="" onclick="abrir_pagina('carrinho.html')" class="carrinho" width="50px" onclick="abrir_pagina('/*depende do que a pessoa pesquisar*/ ')">
                <img src="icone-perfil.png" onclick="abrir_pagina('perfil.php')" class="icone" width="50px" onclick="abrir_pagina('/*depende do que a pessoa pesquisar*/ ')">
            </div>
    </div>

    <div class="retangulo2">
        &nbsp;<div>BLUSAS</div> <div>VESTIDOS</div> <div>SAIAS</div> <div>SHORTS</div> <div>CALÇAS</div> <div>CASACOS</div> <div>SAPATOS</div> <div>BOLSAS</div>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div onclick="abrir_pagina('.html')" id="marcar">
                MARCAR UMA CONSULTA DE MODA
        </div>

        <input id="searchbar" onkeyup="search_items()" type="text" name="search" placeholder="Pesquisar..">

        <img src="lupa.png" class="lupa">&nbsp;
    </div>
       
    <div class="conteudo2">
        <div class="divpromocao">

        </div>
    <div class="consul">
        <div class="escuro">
            <br>
            <img src="bolsa.png">
        <div class="frases">
                ESTÁ EM DÚVIDA SOBRE O QUE COMPRAR?
        </div>
        <div class="frases">
                MARQUE UMA CONSULTA DE MODA!
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