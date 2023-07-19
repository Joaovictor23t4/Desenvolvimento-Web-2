<?php 
if(isset($_POST['submitLogin'])) {
    include_once('../conexao.php');

    $cpfLogin = $_POST['cpfLogin'];
    $senhaLogin = $_POST['senhaLogin'];

    $login = mysqli_query($conexao, "SELECT cpf,senha FROM informacoes WHERE cpf = '$cpfLogin'");

    if($login && mysqli_num_rows($login) > 0) {
        $usuario = mysqli_fetch_assoc($login);

        if(password_verify($senhaLogin, $usuario['senha'])) {
            echo '<meta http-equiv="refresh" content="0;URL=/Desenvolvimento-Web-2/HyperText/index.html">';
            exit();
        }

        else {
            echo "CPF e/ou senha incorretos!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <h1>Login</h1>
            <br>
            <input type="text" name="cpfLogin" id="idCpf" placeholder="CPF">
            <br><br>
            <input type="password" name="senhaLogin" id="idSenha" placeholder="Senha">
            <br><br>
            <input type="submit" name="submitLogin" id="idSubmit" value="Logar">
        </form>
    </div>
</body>
</html>