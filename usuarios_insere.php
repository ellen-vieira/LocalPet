<?php
// INCLUIR  O ARQUIVO E FAZER A CONEXÃO
include('conn/connect.php');

if ($_POST) {

    // RECEBER OS DADOS DO FORMULÁRIO
    // ORGANIZAR OS CAMPOS NA MESMA ORDEM
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // CONSULTA SQL PARA INSERÇÃO DE DADOS
    $insertSQL = "INSERT INTO usuarios
                    ( nome, email, senha)
                    VALUES
                    ('$nome', '$email' , '$senha')
                    ";
                    var_dump($insertSQL);
    $resultado = $conn->query($insertSQL);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- LINKS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<?php include 'header.php'; ?>
<div>
    <section class="d-flex justify-content-center align-items-center">
        <div class="card shadow col-xs-12 col-sm-6 col-md-6 col-lg-4   p-4">
            <div class="mb-4 d-flex justify-content-start align-items-center">
                <h4>Cadastre-se</h4>
            </div>
            <div class="container">
                <form id="cadastro">
                    <!-- NOME -->
                    <div class="mb-4">
                        <div>
                            <label for="nome">Nome:</label>
                            <input id="nome" type="text" name="nome"  class="form-control" placeholder="Digite seu nome..." required>
                        </div>
                    </div>
                    <!-- EMAIL -->
                    <div class="mb-4">
                        <label for="email">Email:</label>
                        <input id="email" type="email" name="email" class="form-control" placeholder="Digite seu E-Mail..." required>
                    </div>
                    <!-- SENHA -->
                    <div class="mb-4">
                        <label for="senha">Senha:</label>
                        <input id="senha" type="password" name="senha" class="form-control"   placeholder="Digite sua senha..." required>
                    </div>
                    <!-- BOTÃO -->
                    <div class="mb-2">
                        <button type="submit" id="enviar" class="col-12 btn btn-danger justify-content-between ">
                            <span>Enviar</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
</html>