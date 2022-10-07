<?php
    include("conecta.php");

    
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    
    $comando = $pdo->prepare("SELECT senha FROM cliente WHERE email = :email");
    
   
    $comando->bindValue(":email", $email);

   
    $comando->execute();

    
    if ($comando->rowCount() == 1){
        
        $resultado = $comando->fetch();
        
        if ($resultado['senha'] == $senha) {
            
            session_start();

            
            $_SESSION['idclientes'] = $resultado['idclientes'];
            $_SESSION['senha'] = $resultado['senha'];
            $_SESSION['nivel_admin'] = $resultado['nivel_admin'];
            $_SESSION['loggedin'] = true;

           
            header("Location:inicial.html");
        }else {
            echo ("Email ou Senha Inválida!");
        }
        
    }else{
        echo ("Email ou Senha Inválida!");
    }

    unset($comando);
    unset($pdo);
?>