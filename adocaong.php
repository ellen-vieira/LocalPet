<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Adoção</title>
</head>
<body>
    <!-- DIV IMAGEM -->
    <div class="container">
        <div class="form-image">
            <img src="images/Adote.jpg" alt="">
        </div>
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <h1>Formulário de Adoção</h1>
                    </div>
                    <!-- BOTÃO -->
                    <div class="voltar-button">
                        <button><a href="#">Voltar</a></button>
                    </div>
                </div>

                    <!-- IMPUTS -->

                    <!-- ESPÉCIES -->
                    <div class="species-inputs">
                        <div class="species=title">
                            <h6>Espécie do animal</h6>
                        </div>
                        <div class="species-group">
                            <div class="species-input">
                                <input type="radio" id="cat" name="species">
                                <label for="cat">Gato</label>
                            </div>
                            <div class="species-input">
                                <input type="radio" id="dog" name="species">
                                <label for="dog">Cachorro</label>
                            </div>
                        </div>
                    </div>
                    <!-- CARACTERISTICAS -->
                <div class="input-group">
                    <div class="input-box">
                        <label for="character">Características fisícas</label>
                        <input id="character" type="text" name="character" placeholder="Cor do pelo, cor dos olhos, manchas, cicatrizes, etc." required>
                    </div>
                    <!-- IDADE -->
                    <div class="input-box">
                        <label for="age"> Idade</label>
                        <input id="age" type="text" name="age" placeholder="Digite a idade aproximada." required>
                    </div>
                     <!-- PORTE -->
                     <div class="size-inputs">
                        <div class="size=title">
                            <h6>Porte do animal</h6>
                        </div>
                        <div class="size-group">
                            <div class="size-input">
                                <input type="radio" id="small" name="size">
                                <label for="small">Pequeno</label>
                            </div>
                            <div class="size-input">
                                <input type="radio" id="medium" name="size">
                                <label for="medium">Médio</label>
                            </div>
                            <div class="size-input">
                                <input type="radio" id="big" name="size">
                                <label for="big">Grande</label>
                            </div>
                        </div>
                    </div>
                      <!-- SAÚDE -->
                    <div class="input-box">
                        <label for="health"> Tem algum problema de saúde e/ou deficiência?</label>
                        <input id="health" type="text" name="health" placeholder="Digite quais se houver." required>
                    </div>
                     <!-- MEDICAÇÃO -->
                     <div class="input-box">
                        <label for="medication"> Toma algum tipo de medicação?</label>
                        <input id="medication" type="text" name="medication" placeholder="Digite quais se houver." required>
                    </div>
                     <!-- VACINAS -->
                     <div class="input-box">
                        <label for="vaccine">Vacinas</label>
                        <input id="vaccine" type="text" name="vaccine" placeholder="Digite quais se houver." required>
                    </div>
                     <!-- COMPORTAMENTO -->
                     <div class="input-box">
                        <label for="behavior">Comportamento</label>
                        <input id="behavior" type="text" name="behavior" placeholder="Digite como o animal age perto de outras pessoas, personalidade, hábitos, etc" required>
                    </div>
                </div>

                <!-- BOTÃO -->
                <div class="continue-button">
                    <button><a href="#">Continuar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

