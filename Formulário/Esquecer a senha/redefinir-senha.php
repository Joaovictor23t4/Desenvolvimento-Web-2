<?php 

session_start();

$urlLogin = 'http://localhost/Desenvolvimento-Web-2-git/Formul%c3%a1rio/Login/login.php';
$texto = 'Clique aqui para voltar para a página de Login!';

if(isset($_SESSION['cpfEsqueci'])) {
    $cpfBuscar = $_SESSION['cpfEsqueci'];

    if(isset($_POST['submit'])) {
        include_once('../conexao.php');
#
        $redefinicaoSenha = $_POST['redefinicaoSenha'];
        $senhaHash = password_hash($redefinicaoSenha, PASSWORD_DEFAULT);
        $confirmacaoSenha = $_POST['confirmacaoSenha'];

        if($redefinicaoSenha == $confirmacaoSenha) {
            $resultadoRedefinir = mysqli_query($conexao, "UPDATE informacoes SET senha = '$senhaHash' WHERE cpf = '$cpfBuscar'");

            $resultadoConfirmacao = mysqli_query($conexao, "SELECT senha FROM informacoes WHERE senha = '$senhaHash'");

            if ($resultadoConfirmacao && mysqli_num_rows($resultadoConfirmacao) > 0) {
                echo "Senha alterada com sucesso!";
                echo '<a href="' . $urlLogin . '">' . $texto . '</a>';
            }

            else {
                echo "Senha não alterada";
            }
        }

        else {
           echo "Confirmação de senha não é igual a nova senha!";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/redefinir-style.css">
    <title>Redefinir a Senha</title>
</head>
<body>
    <div class="container">
        <form action="redefinir-senha.php" method="post">
        <h1>Redefinir Senha</h1>
        <input type="password" name="redefinicaoSenha" id="idSenha" placeholder="Nova Senha" required>
        <br><br>
        <input type="password" name="confirmacaoSenha" id="idConfirmacao" placeholder="Confirmacao de Senha" required>
        <br><br>
        <input type="submit" value="Redefinir" name="submit" id="idSubmit">
        </form>
    </div>
</body>
</html>