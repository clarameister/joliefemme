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
<body>

    <div class="retangulo1">
        <img onclick="busca_imagem();" id="imagem" src="pesquisar.png" width="50px">
        <input type="file" id="meu_upload">
        <div class="frase"> Oiê!</div>
    </div>  

    <input type="submit" class="sair" value="Sair"></input>
    

    <a href="inicial.php"><img src="seta.png" id="voltar"></a>

    
    <div class="pedidos"> Meus Pedidos:</div>

    <div class="conteudo">
    <?php
    
    if($_SESSION['nivel_admin'] == 1){
        echo '<div class="p">
        <img src="caixa.png" width="70%" >
        Pedidos
     </div>
     
     <div class="p">
     <img src="produtos.png" width="65%">
     Cadastrar Produtos
    </div>
    
    <div class="p" >
    <img src="calendario.png" width="60%">
    Consultorias
    </div>';
    }
    else
    {
        echo '<div class="p">
        <img src="caixa.png" width="70%" >
        Pedidos
     </div>
        
        <div class="p" >
        <img src="calendario.png" width="63%">
        Consultorias
        </div>';
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