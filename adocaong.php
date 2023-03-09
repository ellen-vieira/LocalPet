<!DOCTYPE html>
<html lang="pt-br">

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
                    <div class="title">
                        <h1>Formulário de Adoção</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Voltar</a></button>
                    </div>
                </div>

                <!-- ESPÉCIES -->
                <div class="species-inputs">
                    <div class="species-title">
                        <h6>Espécie</h6>
                    </div>

                    <div class="species-group">
                        <div class="species-input">
                            <input id="dog" type="radio" name="species">
                            <label for="dog">Cachorro</label>
                        </div>
                        <br>
                        <div class="species-input">
                            <input id="cat" type="radio" name="species">
                            <label for="cat">Gato</label>
                        </div>
                    </div>
                <!-- PORTE -->
                    <div class="size-title">
                        <h6>Porte</h6>
                    </div>

                    <div class="size-group">
                        <div class="size-input">
                            <input id="peq" type="radio" name="size">
                            <label for="peq">Pequeno</label>
                        </div>
                        <br>
                        <div class="size-input">
                            <input id="med" type="radio" name="size">
                            <label for="med">Médio</label>
                        </div>
                        <br>
                        <div class="size-input">
                            <input id="grd" type="radio" name="size">
                            <label for="grd">Grande</label>
                        </div>
                    </div>
                </div>


                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>
                </div>

                <!-- IMPUTS -->
                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="gender">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="gender">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="gender">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="gender">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button><a href="#">Continuar</a> </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<!-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Adoção</title>
</head>
<body>
    DIV IMAGEM
    <div class="container">
        <div class="form-image">
            <img src="images/Adote.jpg" alt="">
        </div>
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                    <h1>Formulário de Adoção</h1>
                    </div>
                    BOTÃO 
                    <div class="voltar-button">
                        <button><a href="#">Voltar</a></button>
                    </div>
                </div>

                     IMPUTS

                     ESPÉCIES
                    <div class="species-inputs">
                        <div class="species-title">
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
                    

                    CARACTERISTICAS
                <div class="input-group">
                    <div class="input-box">
                        <label for="character">Características fisícas</label>
                        <input id="character" type="text" name="character" placeholder="Cor do pelo, cor dos olhos, manchas, cicatrizes, etc." required>
                    </div>
                     IDADE
                    <div class="input-box">
                        <label for="age"> Idade</label>
                        <input id="age" type="text" name="age" placeholder="Digite a idade aproximada." required>
                    </div>

                    </div>

                      <SAÚDE
                    <div class="input-box">
                        <label for="health"> Tem algum problema de saúde e/ou deficiência?</label>
                        <input id="health" type="text" name="health" placeholder="Digite quais se houver." required>
                    </div>
                      MEDICAÇÃO
                     <div class="input-box">
                        <label for="medication"> Toma algum tipo de medicação?</label>
                        <input id="medication" type="text" name="medication" placeholder="Digite quais se houver." required>
                    </div>
                     VACINAS
                     <div class="input-box">
                        <label for="vaccine">Vacinas</label>
                        <input id="vaccine" type="text" name="vaccine" placeholder="Digite quais se houver." required>
                    </div>
                     <!-- COMPORTAMENTO
                     <div class="input-box">
                        <label for="behavior">Comportamento</label>
                        <input id="behavior" type="text" name="behavior" placeholder="Digite como o animal age perto de outras pessoas, personalidade, hábitos, etc" required>
                    </div>
                </div>

                <!-- BOTÃO 
                <div class="continue-button">
                    <button><a href="#">Continuar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
 -->