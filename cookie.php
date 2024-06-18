<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
   
    setcookie("nome_usuario", $nome, time() + 3600); 
    setcookie("email_usuario", $email, time() + 3600);
    setcookie("senha_usuario", $senha, time() +3600);

    header("Location: cadastro.php");
    exit;
}

?>
