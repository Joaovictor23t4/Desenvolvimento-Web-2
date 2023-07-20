<?php 

if(isset($_POST['submit'])) {
    include_once('../conexao.php');

    $cpfLogin = $_POST['cpfLogin'];
    $senhaLogin = $_POST['senhaLogin'];

    $resultLogin = mysqli_query($conexao, "SELECT cpf,senha FROM informacoes WHERE cpf = '$cpfLogin'");

    if($resultLogin && mysqli_num_rows($resultLogin) > 0) {
        $usuario = mysqli_fetch_assoc($resultLogin);

        if(password_verify($senhaLogin, $usuario['senha'])) {
            header("Location: http://localhost/Desenvolvimento-Web-2-git/HyperText/index.php");
            exit();
        }

        else {
            echo "Senha incorreta";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
        <h1><Label>Login</Label></h1>
        <input type="text" name="cpfLogin" id="idCpf" placeholder="CPF">
        <br><br>
        <input type="password" name="senhaLogin" id="idSenha" placeholder="Senha">
        <br><br>
        <input type="submit" value="Logar" name="submit" id="submitLogin">
        </form>
    </div>

    <img src="/HyperText/index.html" alt="">
</body>
</html>