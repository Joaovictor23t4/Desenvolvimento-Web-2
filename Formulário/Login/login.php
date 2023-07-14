<?php 

if (isset($_POST ['submit'])) {
    //print_r('Nome: ' . $_POST['nomeL']);
    //print_r('Senha: ' . $_POST['senhaL']);

    include_once('../conexao.php');

    $nomeLogin = $_POST['nomeL'];
    $senhaLogin = $_POST['senhaL'];

}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-login.css">
    <title>Tela de Login</title>
</head>
<body>
    <div id="tela-login">
        <form action="login.php" method="post">
        <h1>Login</h1>
        <input type="text" placeholder="Nome" name="nomeL" id="idNome">
        <br><br>
        <input type="password" placeholder="Senha" name="senhaL" id="idSenha">
        <br><br>
        <input type="submit" value="Enviar" name="submit" id="submit">
        </form>
    </div>
</body>
</html>