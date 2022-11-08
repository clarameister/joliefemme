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
#voltar 
{
    width: 40px;
    height: 40px;
    margin-left: -735px;
    margin-top: 78px;
}
.pedidos
{
    color: rgb(135,76,76);
    font-size: 25px;
    position: absolute;
    top: 89px;
    left: 239px;
}
.conteudo
{
    width: 70%;
    height: 15%;
    margin-top: 63px;
    margin-left: 6px;
    display: flex;
    text-align: center;
    justify-content: center;
}
.p
{
    background-color: rgb(222,182,182);
    border-radius: 15px;
    width: 132px;
    height: 136px;
    font-size: 24px;
    color:rgb(135,76,76);
    display:flex;
    flex-direction: column;
    justify-content: center;
    justify-items: center;
    align-content: center;
    align-items: center;
    padding:10px;
    margin-left: 40px;
}
.dados
{
    color: rgb(135,76,76);
    font-size: 25px;
    position: absolute;
    top: 410px;
    left: 239px;
}
.lapis
{
    position: absolute;
    top: 1px;
    left: 140px;
}
.conteudo2
{
    width: 70%;
    color: rgb(135,76,76);
    display: flex;
    flex-direction: row;
    justify-items: center;
    justify-content: center;
    align-items: center;
    align-content: center;
    margin-top: 220px;
}
.nse
{
    font-size: 25px;
    width: 50%;
}
.etc
{
    font-size: 25px;
    width: 50%;
}
#nome
{
    border-radius: 12px;
    width:371px;
    height: 17px;
}
#email
{
    border-radius: 12px;
    width:371px;
    height: 17px;
}
#endereco
{
    border-radius: 12px;
    width:340px;
    height: 17px;
}
#senha
{
    border-radius: 12px;
    width:371px;
    height: 17px;
}
#telefone
{
    border-radius: 12px;
    width:371px;
    height: 17px;
}
#cpf
{
    border-radius: 12px;
    width:371px;
    height: 17px;
}
input
{
    border-color: white;
    border-style: solid;
    border-radius: 22px;
    border-width: 2px;
}
.link
{
     color: rgb(135,76,76);
}
.voltar
{
    width: 40px;
    height: 40px;
    margin-top: 13px;
    margin-left: 11px;
}
</style>
<body>

    <div class="retangulo1">
    <a href="inicial.php"><img src="voltar.png" class="voltar"></a>
        <img onclick="busca_imagem();" id="imagem" src="pesquisar.png" width="50px">
        <input type="file" id="meu_upload">
        <div class="frase"> Oiê!</div>
    </div>  

    <input type="submit" class="sair" value="Sair"></input>
    

    

    
    <div class="pedidos"> Meus Pedidos:</div>

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

     <a href="pcadastroitens.html" class="link">
     <div class="p">
     <img src="produtos.png" width="70%" >
     Cadastrar Produtos
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

    <div class="dados">Meus Dados: <img src="lapis.png" width="18%" class="lapis"></div>

    <div class="conteudo2">
            <div class="nse">
                <table>
        
                    <tr>
                        <td>
                            Nome:
                        </td>
                        <td>
                            <input type="text" id="nome">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Senha:
                        </td>
                        <td>
                            <input type="text" id="senha">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Endereço:
                        </td>
                        <td>
                            <input type="text" id="endereco">
                        </td>
                    </tr>
                </table>
            
            </div>
            <div class="etc">
                    <table>
        
                            <tr>
                                <td>
                                    E-mail:
                                </td>
                                <td>
                                    <input type="text" id="email">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Telefone:
                                </td>
                                <td>
                                    <input type="text" id="telefone">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    CPF:
                                </td>
                                <td>
                                    <input type="text" id="cpf">
                                </td>
                            </tr>
                        </table>
            </div>  
        </div>
</body>
<script src="jquery.js"></script>
<script> 
var variaveis = new URLSearchParams(location.search);
var usuario = variaveis.get("usuario");
console.log(usuario)
function busca_imagem()
{
    meu_upload.click();
}
    $(document).on("change", "#meu_upload", function(e) {
        showThumbnail(this.files);
    });
    function showThumbnail(files) {
        if (files && files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
               imagem.src =  e.target.result;
                caminho= e.target.result;
            }

            reader.readAsDataURL(files[0]);
        }
    }


</script>
</html>