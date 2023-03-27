<?php
include "conn/connect.php";

$listaProGeral = $conn->query("select * from animais where id");
$rowProGeral = $listaProGeral->fetch_assoc();
$nRows = $listaProGeral->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>A&P</title>
</head>
<?php include 'header.php'; ?>
<div class="container">

    <h2 class="breadcrumb alert-danger"><strong></strong></h2>
    <div class="card" style="width: 18rem;">
        <?php do { ?> <!-- Início da estrutura de repetição -->
            <!-- imagem -->
            <img src="images/<?php echo $rowProGeral['imagem_animal']; ?>" 
            class="img-responsive img-rounded" style="height: 20em;">
            <div class="card-body">
                <!-- nome -->
                <h5 class="card-title text-center">
                    <strong><?php echo $rowProGeral['nome']; ?></strong>
                </h5>
                <!-- descricao -->
                <p class="card-text"><?php echo $rowProGeral['descricao']; ?></p>
                <img src="gatinho.jpg" alt="">

                <!-- botao -->
                <a href="#" class="btn btn-danger">Saiba Mais</a>
            </div>
        <?php } while ($rowProGeral = $listaProGeral->fetch_assoc()); ?> <!-- Final da estrutura de repetição -->
    </div>
</div>
</html>