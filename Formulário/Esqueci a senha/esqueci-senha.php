<?php 

if (isset($_POST['submit'])) {
    include_once('../conexao.php');

    $nomeRedefinir = $_POST['nomeEsqueci'];

    $resultadoBuscar = mysqli_query($conexao, "SELECT nome FROM informacoes WHERE nome = '$nomeRedefinir'");

    if ($resultadoBuscar && mysqli_num_rows($resultadoBuscar) > 0) {
        header("Location: http://localhost/Desenvolvimento-Web-2/Formul%c3%a1rio/Esqueci%20a%20senha/redefinir.php");
    }

    else {
        echo "Usuário não encontrado";
    }
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Estilos/esqueci-style.css">
    <title>Esqueci a Senha</title>
</head>
<body>
    <div class="box">
        <h1>Esqueci a Senha</h1>
        <form action="esqueci-senha.php" method="post">
        <input type="text" name="nomeEsqueci" id="idNome" placeholder="Nome">

        <br><br>

        <input type="submit" value="Enviar" name="submit" id="idSubmit">
        </form>
    </div>
</body>
</html>