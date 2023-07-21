<?php 

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['cpf'])) {
    die("Erro: você não está logado! <p><a href=\"../Formulário/Login/login.php\">Logar</a></p>");
}

?>