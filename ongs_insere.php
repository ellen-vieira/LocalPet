<?php
// INCLUIR  O ARQUIVO E FAZER A CONEXÃO
include('conn/connect.php');

if ($_POST) {

    // GUARDA O NOME DA IMAGEM NO BANCO E O ARQUIVO NO DIRETÓRIO
    if (isset($_POST['enviar'])) {
        $nome_img   =   $_FILES['imagem_ong']['name'];
        $tmp_img    =   $_FILES['imagem_ong']['tmp_name'];
        $dir_img    =   "../images/" . $nome_img;
        move_uploaded_file($tmp_img, $dir_img);
    };


    // RECEBER OS DADOS DO FORMULÁRIO
    // ORGANIZAR OS CAMPOS NA MESMA ORDEM
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $cpf = $_POST['cpf'];
    $descricao = $_POST['descricao'];
    $imagem_ong = $_FILES['imagem_ong']['name'];

    // CONSULTA SQL PARA INSERÇÃO DE DADOS
    $insertSQL = "INSERT INTO ongs
                    ( nome, cnpj, cpf, descricao, imagem_ong)
                    VALUES
                    ('$nome', '$cnpj', '$cpf', '$descricao', '$imagem_ong')
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
    <title>Cadastrar ONGs</title>
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
                <!-- TITULO -->
                <h4>Cadastrar ONGs</h4>
            </div>
            <div class="mb-1">
                <form id="cadastro" method="post">
                    <!-- NOME -->
                    <div class="mb-4">
                        <div>
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" name="nome" id="nome" required>
                        </div>
                    </div>
                    <!-- CNPJ -->
                    <div class="mb-4">
                        <label for="cnpj">CNPJ:</label>
                        <input type="cnpj" class="form-control" name="cnpj" id="cnpj" required>
                    </div>
                    <!-- CPF -->
                    <div class="mb-4">
                        <label for="cpf">CPF:</label>
                        <input type="cpf" class="form-control" name="cpf" id="cpf" required>
                    </div>
                    <!-- DESCRIÇÃO -->
                    <div class="mb-4">
                        <label for="descricao">Descrição:</label>
                        <textarea name="descricao" id="descricao" class="form-control"></textarea>
                    </div>
                    <!-- IMAGEM -->
                    <div class="mb-4">
                        <label for="imagem_ong" class="form-label">Imagem da sua ONG:</label>
                        <input class="form-control" type="file" id="imagem_ong">
                    </div>
                    <!-- BOTÃO -->
                    <div class="mb-2">
                        <button type="submit" id="enviar" class="col-12 btn btn-danger justify-content-between">
                            <span>Enviar</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

</html>