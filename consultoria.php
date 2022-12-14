<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet">
    <title>Consultoria</title>
</head>
<style>
    body
{
    background-color: #F1D4D4;
    overflow: hidden;
}
#ret1
{
    background-color: #D39999;
    color: white;
    font-size: 25px;
    height: 60px;
    width: 1680px;
    margin-left: -19px;
    margin-top: -10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}
#seta 
{
    width: 40px;
    height: 40px;
    margin-top: 23px;
    margin-left: 33px;
}
.quadrado
{
    margin-left: 159px;
    margin-top: 30px;
}
#voltar
{
    margin-left: 83px;
    margin-top: 58px;
}
#consd
{
    background-color: #874C4C;
    color: white;
    font-size: 20px;
    width: 403px;
    height: 65px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}
#ret2
{
    background-color: #F1D4D4;
    width: 403px;
    height: 431px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}
#dt
{
    margin-left: 700px;
    margin-top: -514px;
    background-color: #874C4C;
    color: white;
    font-size: 20px;
    width: 430px;
    height: 65px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}
#data
{
    margin-left: 700px;
    margin-top: 10px;
}
#hr
{
    margin-left: 700px;
    margin-top: 28px;
    background-color: #874C4C;
    color: white;
    font-size: 20px;
    width: 430px;
    height: 65px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}
#horario
{
    margin-left: 700px;
    margin-top: 10px;
}
input[type=time]
{
    width: 425px;
    height: 137px;
    background-color: white;
    color: #874C4C;
    border-style: solid;
    border-color: white;
    border-radius: 5px;
    font-size: 15px;
}
input[type=date]
{
    width: 425px;
    height: 137px;
    background-color: white;
    color: #874C4C;
    border-style: solid;
    border-color: white;
    border-radius: 5px;
    font-size: 15px;
}
input[type=submit]
{
    width: 425px;
    height: 80px;
    color: white;
    background-color: #874C4C;
    border-style: solid;
    border-color: #874C4C;
    border-radius: 5px;
    font-size: 15px;
    margin-left: 450px;
    margin-top: 43px;
}
.voltar
{
    width: 40px;
    height: 40px;
    margin-top: 34px;
    margin-left: -1587px;
}
.frase
{
    position: relative;
    top: -41px;
    left: -156px;
}
.td
{
    font-size: 18px;
    height: 80px;
    color: rgb(135, 76, 76);;
}
.table 
{
    border-color: #874C4C;
    border-style: solid;
    border-width: 2px;
    color: #874C4C;
    background-color: #FFF0F5;
    font-size: 18px;
    margin-top: -81px;
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
    <div id="ret1">
        <a href="perfil.php"><img src="chevron.png" class="voltar"></a>
        <div class="frase">JOLIE FEMME</div>
    </div>
    <div class="quadrado">
        <div id="consd">
            CONSULTORAS DISPON??VEIS
        </div>
        <div id="ret2">
        <table width="80%" border="1" class="table">
            <tbody>
            <?php
            
            include("conecta.php");
            
            $comando = $pdo->prepare("SELECT * FROM consultoras ");
            
            $comando->execute();
            
            if($comando->rowCount() >= 1)
            {
                $lista_consultoras = $comando->fetchAll();
            }else{
                echo("N??o deu certo!");
            }
            
              unset($comando);
              unset($pdo);
            
            
            if (!empty($lista_consultoras)) {
             
                foreach($lista_consultoras as $linha) { ?>
                    <tr>
                        <td class="td"> <?php echo($linha["nome_cons"]); ?> </td>
                        <td class="td"> <?php echo($linha["email_cons"]); ?></td>
                        <td class="td"> <?php echo($linha["telefone_cons"]); ?></td>
                    </tr>
            <?php }
            }
            ?>
        </tbody>
            </table>
        </div>
    </div>
    <br>
    <form action="inserir2.php" method="post">
        <div class="inputs">
            <div id="dt">
                ESCOLHA UMA DATA:
            </div>
    <br>
    <div id="data">
        <input type="date" min="2022-10-18" max="2022-12-31" id="dia" name="dia">
    </div>
    <div id="hr">
        MARCAR UM HOR??RIO:
    </div>
    <br>
    <div id="horario">
        <input type="time" id="hora" name="hora">
    </div>
    </div>
    <input type="submit" value="MARCAR CONSULTA" id="mc">
    </form>

</body>


</html>