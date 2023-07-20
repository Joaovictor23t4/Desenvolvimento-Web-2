<?php 

session_start();

if(isset($_POST['submit'])) {
    include_once('../conexao.php');

    $cpfEsqueci = $_POST['cpfEsqueci'];

    $resultBusca = mysqli_query($conexao, "SELECT cpf FROM informacoes WHERE cpf = '$cpfEsqueci'");

    if($resultBusca && mysqli_num_rows($resultBusca) > 0) {
        $_SESSION['cpfEsqueci'] = $cpfEsqueci;
        header("Location: http://localhost/Desenvolvimento-Web-2-git/Formul%c3%a1rio/Esquecer%20a%20senha/redefinir-senha.php");
        exit();
    }

    else {
        echo "CPF não encontrado";
    }
}

?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/esqueci-style.css">
    <title>Esqueci a senha</title>
</head>
<body>
    <div class="container">
        <form action="esqueci-senha.php" method="post">
        <h1>Esqueci a senha</h1>
        <p>Escreva o seu CPF cadastrado</p>
        <input type="text" name="cpfEsqueci" id="idCpfEsqueci" placeholder="CPF">
        <br><br>
        <input type="submit" name="submit" value="Enviar" id="idSubmitEsqueci">
        </form>
    </div>
</body>
</html>