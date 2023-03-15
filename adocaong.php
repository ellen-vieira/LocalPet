<?php
// INCLUIR  O ARQUIVO E FAZER A CONEXÃO
include('conn/connect.php');

if ($_POST) {
    print_r($_POST);
    print_r($_FILES);

    // GUARDA O NOME DA IMAGEM NO BANCO E O ARQUIVO NO DIRETÓRIO
    if (isset($_POST['enviar'])) {
        $nome_img   =   $_FILES['imgadocao']['name'];
        $tmp_img    =   $_FILES['imgadocao']['tmp_name'];
        $dir_img    =   "../images/" . $nome_img;
        move_uploaded_file($tmp_img, $dir_img);
    };

    // RECEBER OS DADOS DO FORMULÁRIO
    // ORGANIZAR OS CAMPOS NA MESMA ORDEM
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $sexo = $_POST['sexo'];
    $porte = $_POST['porte'];
    $idade = $_POST['idade'];
    $descricao = $_POST['descricao'];
    $enfermidades = $_POST['enfermidades'];
    $medicamentos = $_POST['medicamentos'];
    $vacinas = $_POST['vacinas'];
    $comportamento = $_POST['comportamento'];
    $imgadocao = $_FILES['imgadocao']['name'];
    
    // CONSULTA SQL PARA INSERÇÃO DE DADOS
    $insertSQL = "INSERT INTO animais
                    ( nome, especie, raca, sexo, porte, idade, descricao,
                    enfermidades, medicamentos, vacinas, comportamento, imgadocao)
                    VALUES
                    ('$nome', '$especie' , '$raca', '$sexo', '$porte', '$idade', '$descricao',
                    '$enfermidades', '$medicamentos', '$vacinas', '$comportamento', '$imgadocao' )
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
     <title>Formulario de Adoção - ONG</title>
     <!-- LINKS BOOTSTRAP -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- ICON -->
    <link rel="icon" type="image/png" href="images/favicon.png" />
</head>
 <?php include 'header.php'; ?>
 <body>
     <section class="d-flex justify-content-center align-items-center">
         <div class="card shadow col-xs-12 col-sm-6 col-md-6 col-lg-4 p-4">
             <div class="mb-4 d-flex justify-content-start align-items-center">
                <!-- TÍTULO -->
                 <h4>Formulario de Adoção - ONG</h4>
             </div>
             <div class="mb-1">
                 <form id="formulario" method="post">
                     <div class="mb-4">
                         <!-- NOME -->
                         <div>
                             <label for="nome">Nome:</label>
                             <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome do animal" required>
                         </div>
                     </div>
                     <!-- ESPECIE -->
                     <div class="mb-4">
                         <label for="especie">Espécie:</label><br>
                         <input type="radio" class="form-check-input" name="especie" value="gato"> Gato
                         <input type="radio" class="form-check-input" name="especie" value="cachorro"> Cachorro
                     </div>
                     <!-- RAÇA -->
                     <div class="mb-4">
                         <label for="raca">Raça:</label>
                         <input type="text" class="form-control" name="raca" id="raca" placeholder="Digite a raça do animal" required>
                     </div>
                     <!-- SEXO -->
                     <div class="mb-4">
                         <label for="sexo">Sexo:</label><br>
                         <input type="radio" class="form-check-input" name="sexo" value="macho"> Macho
                         <input type="radio" class="form-check-input" name="sexo" value="femea"> Fêmea
                     </div>
                     <!-- PORTE -->
                     <div class="mb-4">
                         <label for="porte">Porte:</label><br>
                         <input type="radio" class="form-check-input" name="porte" value="pequeno"> Pequeno
                         <input type="radio" class="form-check-input" name="porte" value="medio"> Médio
                         <input type="radio" class="form-check-input" name="porte" value="grande"> Grande
                     </div>
                     <!-- IDADE -->
                     <div class="mb-4">
                         <label for="idade">Idade:</label><br>
                         <input type="radio" class="form-check-input" name="idade" value="filhote"> Filhote
                         <input type="radio" class="form-check-input" name="idade" value="adulto"> Adulto
                         <input type="radio" class="form-check-input" name="idade" value="idoso"> Idoso
                     </div>
                     <!-- CARACT. FÍSICAS -->
                     <div class="mb-4">
                         <label for="descricao" required>Características Físicas:</label>
                         <textarea name="descricao" id="descricao" class="form-control" placeholder="Ex: manchas, cor do pelo. cor dos olhos, etc."></textarea>
                     </div>
                     <!-- SAÚDE -->
                     <div class="mb-4">
                         <label for="enfermidades">Possui algum problema de saúde e/ou deficiência?</label>
                         <textarea name="enfermidades" id="enfermidades" class="form-control" placeholder="Digite qual se houver"></textarea>
                     </div>
                     <!-- MEDICAÇÃO -->
                     <div class="mb-4">
                         <label for="medicamentos">Toma algum tipo de medicação?</label>
                         <input type="text" class="form-control" name="medicamentos" id="medicamentos" placeholder="Digite qual se houver" required>
                     </div>
                     <!-- VACINAS -->
                     <div class="mb-4">
                         <label for="vacinas">Vacinas recebidas:</label>
                         <input type="text" class="form-control" name="vacinas" id="medicacao" placeholder="Digite qual se houver" required>
                     </div>
                     <!-- COMPORTAMENTO -->
                     <div class="mb-4">
                         <label for="comportamento" required>Comportamento:</label>
                         <textarea name="comportamento" id="comportamento" class="form-control" placeholder="Ex: personalidade, hábitos, preferências, etc."></textarea>
                     </div>
                     <!-- IMAGEM -->
                     <div class="mb-4">
                        <label for="imgadocao" class="form-label">Imagem do animal:</label>
                        <input class="form-control" type="file" id="imgadocao" name="imgadocao" accept="images/*">
                     <img src="" alt="" name="imagem" id="imagem" class="img-responsive">
                   
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

<!-- Script para a imagem -->
<script>
        document.getElementById("imgadocao").onchange = function() {
            var reader = new FileReader();
            if (this.files[0].size > 528385) {
                alert("A imagem deve ter no máximo 500Kb");
                $("#imagem").attr("src", "blank");
                $("#imagem").hide();
                $('#imgadocao').wrap('<form>').closest('form').get(0).reset();
                $('#imgadocao').unwrap();
                return false;
            };
            // if (this.files[0].type.indexOf("images") == -1) {
            //     alert("Formato inválido, escolha uma imagem!");
            //     $("#imagem").attr("src", "blank");
            //     $("#imagem").hide();
            //     $('#imgadocao').wrap('<form>').closest('form').get(0).reset();
            //     $('#imgadocao').unwrap();
            //     return false;
            // };
            reader.onload = function(e) {
                // obter dados carregados e renderizar miniatura.
                document.getElementById("imagem").src = e.target.result;
                $("#imagem").show();
            };
            // leia o arquivo de imagem como um URL de dados.
            reader.readAsDataURL(this.files[0]);
        };
    </script>


 </body>

 </html>