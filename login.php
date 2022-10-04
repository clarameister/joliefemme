<?php
 include("conecta.php");

 
    $email = $_POST["email"];
    $senha = $_POST["senha"];

   
    $comando = $pdo->prepare("SELECT * FROM cliente WHERE email = '$email' and senha =  '$senha'");

    $comando->execute();

   
    if ($comando->rowCount() == 1) {
        $resultado = $comando->fetch();

    
        if ($resultado['senha'] == ($senha)) {
          
            session_start();

           
            $_SESSION['pk_usuario'] = $resultado['pk_usuario'];
            $_SESSION['senha'] = $resultado['senha'];
            $_SESSION['is_adm_usuario'] = $resultado['is_adm_usuario'];
            $_SESSION['loggedin'] = true;

         
            header("Location:inicial.html");
        } else {
            echo ("Email ou Senha Inválida!");
        }
    } else {
        echo ("Email ou Senha Inválida!");
    }
   
    unset($comando);
    unset($pdo);
?>