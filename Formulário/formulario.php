<?php 

 if (isset($_POST ['submit'])) {
    /*print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('CPF: ' . $_POST['cpf']);
    print_r('<br>');
    print_r('Telefone: ' . $_POST['telefone']);
    print_r('<br>');
    print_r('Data de Nascimento: ' . $_POST['data_nasc']);
    print_r('<br>');
    print_r('Sexo: ' . $_POST['genero']);
    print_r('<br>');
    print_r('Email: ' . $_POST['email']);
    print_r('<br>');
    print_r('Senha: ' . $_POST['senha']);
    */

    include_once('conexao.php');

    $urlLogin = 'http://localhost/Desenvolvimento-Web-2/Formul%c3%a1rio/Login/login.php';
    $texto = 'Clique aqui para ir para a página de Login!';

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $data_nasc = $_POST['data_nasc'];
    $genero = $_POST['genero'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $result = mysqli_query($conexao, "INSERT INTO informacoes(nome,cpf,telefone,data_nasc,genero,email,senha) VALUES('$nome', '$cpf', '$telefone', '$data_nasc', '$genero', '$email', '$senha')");

    $confirmResult = mysqli_query($conexao, "SELECT cpf FROM informacoes WHERE cpf = '$cpf'");

    if ($confirmResult && mysqli_num_rows($confirmResult) === 0) {
        echo "CPF não cadastrado";
    }

    else if ($confirmResult && mysqli_num_rows($confirmResult) > 0) {
        echo "CPF cadastrado!";
        echo '<a href="' . $urlLogin . '">' . $texto . '</a>';
    }
 }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-formulario.css">
    <link rel="shortcut icon" href="../controle.ico" type="image/x-icon">
    <title>Interação com Formulários</title>
</head>
<body>
    <section>
        <form action="formulario.php" method="post">
            <fieldset>
                <legend> <strong>Formulário</strong> </legend>

                <div class="inputContainer">
                    <input type="text" name="nome" id="idNome" class="inputUser" required>
                    <label for="nome" class="labelReduce">Nome</label>
                </div>

                <br><br>

                <div class="inputContainer">
                    <input type="text" class="inputUser" name="cpf" id="idCpf" required>
                    <label for="cpf" class="labelReduce">CPF</label>
                </div>

                <br><br>

                <div class="inputContainer">
                    <input type="tel" name="telefone" id="idTelefone" class="inputUser" required>
                    <label for="telefone" class="labelReduce">Telefone</label>
                </div>

                    <label for="data_nasc"> <strong>Data de Nascimento:</strong> </label>
                    <input type="date" name="data_nasc" id="idDataN" required>

                <div class="inputContainer">
                    <p>Sexo:</p>
                    <input type="radio" name="genero" id="generoMasculino" value="Masculino" required>
                    <label for="masculino">Masculino</label>

                    <br>

                    <input type="radio" name="genero" id="generoFeminino" value="Feminino" required>
                    <label for="feminino">Feminino</label>
                </div>

                <br><br>

                <div class="inputContainer">
                    <input type="text" name="email" id="idEmail" class="inputUser" required>
                    <label for="email" class="labelReduce">Email</label>
                </div>

                <br><br>

                <div class="inputContainer">
                    <input type="password" name="senha" id="idSenha" class="inputUser" required>
                    <label for="senha" class="labelReduce">Senha</label>
                </div>

                <br><br>

                <input type="submit" name="submit" id="submit" value="Enviar Formulários">
            </fieldset>
        </form>
    </section>
</body>
</html>