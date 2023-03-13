<?php
// Incluir o arquivo e fazer a conexão
include('conn/connect.php');

if ($_POST) {

    // Receber os dados do formulário
    // Organizar os campos na mesma ordem
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta SQL para inserção de dados
    $insertSQL = "INSERT INTO usuarios
                    ( id, nome, email, senha)
                    VALUES
                    (0, '$nome', '$email' , '$senha')
                    ";
                    var_dump($insertSQL);
    $resultado = $conn->query($insertSQL);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
</head>

<body>
    <!-- DIV IMAGEM -->
    <div class="container">
        <div class="form-image">
            <img src="images/Usuario.png" alt="">
        </div>
        <div class="form">
            <form action="#" method="POST">
                <div class="form-header">
                    <!-- TITULO -->
                    <div class="title">
                        <h1>Cadastro</h1>
                    </div>
                    <!-- BOTÃO VOLTAR -->
                    <div class="login-button">
                        <button><a href="home.php">Voltar</a></button>
                    </div>
                </div>
                <!-- INPUTS -->
                <div class="input-group">
                    <div class="input-box">
                        <label for="Nome">Nome</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu Nome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit">Entrar</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>