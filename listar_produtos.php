<?php

<<<<<<< Updated upstream
include("conecta.php"); 
=======
include("conecta.php");
>>>>>>> Stashed changes

$comando = $pdo->prepare("SELECT nome_prod, preco, imagem FROM produto");
$comando->execute();

?>