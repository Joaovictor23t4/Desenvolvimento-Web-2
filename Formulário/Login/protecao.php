<?php 

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['cpf'])) {
    die("Erro: Você não está logado! <p><a href=\"../Formulário/opcoes-login/opcoes.php\">Logar</p>");
}

?>