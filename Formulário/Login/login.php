<?php 

if (isset($_POST['submit'])) {
    //print_r('Nome: ' . $_POST['nomeL']);
    //print_r('Senha: ' . $_POST['senhaL']);

    include_once('../conexao.php');

    $nomeLogin = $_POST['nomeL'];
    $senhaLogin = $_POST['senhaL'];

    $resultLogin = mysqli_query($conexao, "SELECT nome FROM informacoes WHERE nome = '$nomeLogin' AND senha = '$senhaLogin'");

    if ($resultLogin && mysqli_num_rows($resultLogin) > 0) {
        echo '<meta http-equiv="refresh" content="0;URL=/Desenvolvimento-Web-2/HyperText/">';
        exit();
    } else {
        echo "Nome e/ou senha incorretos.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-login.css">
    <link rel="shortcut icon" href="../controle.ico" type="image/x-icon">
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