<?php 

if (isset($_POST['submit'])) {
    include_once('../conexao.php');

    $senhaAtualizada = $_POST['senhaNova'];
    $senhaHash = password_hash($senhaAtualizada, PASSWORD_DEFAULT);

    $resultadoRedefinir = mysqli_query($conexao, "UPDATE informacoes SET senha = '$senhaHash' WHERE id = '4'");
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Estilos/redefinir-style.css">
    <title>Redefinir Senha</title>
</head>
<body>
    <div class="box">
        <h1>Redefinir a Senha</h1>

        <form action="redefinir.php" method="post">
            <input type="password" name="senhaNova" id="idSenha" placeholder="Nova senha:">
            <br><br>
            <input type="submit" value="Redefinir Senha" name="submit" id="idSubmit">
        </form>
    </div>
</body>
</html>