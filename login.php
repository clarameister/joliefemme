<?php
 
 include("conecta.php");

    $email = $_POST["email"];
    $set_senha = $_POST["senha"];

    $comando = $pdo->prepare("SELECT senha, nivel_admin, idclientes FROM cliente WHERE email = :email");
    
   
    $comando->bindValue(":email", $email);

   
    $comando->execute();

    
    if ($comando->rowCount() == 1){
        
        $resultado = $comando->fetch();
        
        if ($resultado['senha'] == $set_senha) {
            
            session_start();

            
            $_SESSION['id_clientes'] = $resultado['id_clientes'];
            $_SESSION['senha'] = $resultado['senha'];
            $_SESSION['nivel_admin'] = $resultado['nivel_admin'];
            $_SESSION['loggedin'] = true;

           
            header("Location:inicial.php");
        }else {
            echo ("Email ou Senha Inválida!");
        }
        
    }else{
        echo ("Email ou Senha Inválida!");
    }

    unset($comando);
    unset($pdo);
?>
