<?php
        session_start();
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            header("location: login.html");
                exit;
        }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estiloperfil.css">
    <title>Perfil</title>
</head>
<style>
body {
    background-color: rgb(241, 212, 212);
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    height: 100vh;
    margin: 0%;
    overflow: hidden;
}

.retangulo1 {
    background-color: rgb(211, 153, 153);
    width: 100%;
    height: 65px;
    display: flex;
    align-items: flex-start;
    align-content: flex-start;
    justify-content: flex-start;
    justify-items: flex-start;
}
.tudo
{
    margin-left: 100px;
    margin-top: 46px;
    height: 1000px;
}
.sair {
    background-color: rgb(222, 150, 150);
    width: 100px;
    margin-top: -40px;
    margin-left: 1000px;
}

.frase {
    color: rgb(135, 76, 76);
    font-size: 25px;
    position: absolute;
    margin-top: 17px;
    margin-left: 125px;
}

#meu_upload {
    display: none;
}

#imagem {
    position: absolute;
    margin-top: 7px;
    margin-left: 61px;
}

#voltar {
    width: 40px;
    height: 40px;
    margin-left: -735px;
    margin-top: 78px;
}

.pedidos {
    color: rgb(135, 76, 76);
    font-size: 25px;
    position: absolute;
    top: 89px;
    left: 239px;
}

.conteudo {
    width: 70%;
    height: 15%;
    margin-top: 63px;
    margin-left: 6px;
    display: flex;
    text-align: center;
    justify-content: center;
}

.p {
    background-color: rgb(222, 182, 182);
    border-radius: 15px;
    width: 132px;
    height: 136px;
    font-size: 20px;
    color: rgb(135, 76, 76);
    display: flex;
    flex-direction: column;
    justify-content: center;
    justify-items: center;
    align-content: center;
    align-items: center;
    padding: 10px;
    margin-left: 40px;
}

.dados {
    color: rgb(135, 76, 76);
    font-size: 25px;
    position: absolute;
    top: 410px;
    left: 239px;
}

.lapis {
    position: absolute;
    top: 1px;
    left: 140px;
}

.conteudo2 {
    width: 70%;
    color: rgb(135, 76, 76);
    display: flex;
    flex-direction: row;
    justify-items: center;
    justify-content: center;
    align-items: center;
    align-content: center;
    margin-top: 220px;
}

.nse {
    font-size: 25px;
    width: 50%;
}

.etc {
    font-size: 25px;
    width: 50%;
}

input {
    border-color: white;
    border-style: solid;
    border-radius: 22px;
    border-width: 2px;
}

.link {
    color: rgb(135, 76, 76);
}

.voltar {
    width: 40px;
    height: 40px;
    margin-top: 13px;
    margin-left: 11px;
}

.titulo {
    color: #874C4C;
    font-size: 20px;
    display: flex;
    align-items: center;
    flex-direction: column;
    margin-top: 60px;
    margin-left: 442px;
}

.campos {
    margin-left: 660px;
    margin-top: 50px;
}

.cont {
    margin-top: 140px;
    margin-left: -554px;
}

input[type=text] {
    border-color: #874C4C;
    background-color: white;
    border-radius: 15px;
    border-width: 2px;
    border-style: solid;
    width: 441px;
    height: 25px;
    margin-top: 5px;
    margin-left: -101px;
}

.redefinir {
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

<body>

    <div class="retangulo1">
        <a href="inicial.php"><img src="chevron.png" class="voltar"></a>
        <img onclick="busca_imagem();" id="imagem" src="pessoas.png" width="50px">
        <input type="file" id="meu_upload">
        <div class="frase"> Oiê!</div>
    </div>
    
    <input type="submit" class="sair" value="Sair">
    <div class="tudo">
    <div class="conteudo">
        <?php
    
    if($_SESSION['nivel_admin'] == 1){
        echo '
        <a href="carrinho.php" class="link">
        <div class="p">
        <img src="caixa.png" width="70%" >
        Pedidos
     </div>
    </a>

     <a href="produtos.html" class="link">
     <div class="p">
     <img src="produtos.png" width="70%" >
     Gerenciar Produtos
    </div>
    </a>

    <a href="consultoria.html" class="link">
    <div class="p" >
    <img src="calendario.png" width="60%">
    Consultorias
    </div>
    </a>';
    }
    else
    {
        echo '
        <a href="carrinho.php" class="link">
        <div class="p">
        <img src="caixa.png" width="70%" >
        Pedidos
     </div>
    </a>
        <a href="consultoria.html" class="link">
        <div class="p">
        <img src="calendario.png" width="63%">
        Consultorias
        </div>
        </a>'
        ;
    }
    ?>
    </div>

    <div class="cont">
        <div class="titulo">
            Redefina sua senha:
        </div>
        <form action="redefinir.php" method="POST">
            <div class="campos">
                <input type="text" name="senha" placeholder="Senha atual"><br>
                <input type="text" name="senhanova" placeholder="Nova senha"><br>
                <input type="submit" value="Redefinir" class="redefinir">
            </div>
        </form>
    </div>

</div>
</body>
<script src="jquery.js"></script>
<script>
var variaveis = new URLSearchParams(location.search);
var usuario = variaveis.get("usuario");
console.log(usuario)

function busca_imagem() {
    meu_upload.click();
}
$(document).on("change", "#meu_upload", function(e) {
    showThumbnail(this.files);
});
function showThumbnail(files) {
    if (files && files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            imagem.src = e.target.result;
            caminho = e.target.result;
        }

        reader.readAsDataURL(files[0]);
    }
}
</script>

</html>