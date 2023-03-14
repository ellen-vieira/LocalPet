<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- TITULO NAV -->
    <title>Formulário de Adoção - ONG</title>
     <!-- ICON -->
  <link rel="icon" type="image/png" href="images/favicon.png" />
    <style>
        #fundo{
            background-color: rgb(255, 145, 77);
            ;
        }

        #btn-violet{
            color: #2a1e5c;
        }

        /* input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
        }

        input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #2a1e5c;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
       } */
       
    </style>
</head>
<body>
      
<div class="container px-5 my-7" id="fundo">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <!-- TITULO -->
      <div class="title text-violet">
         <h4>Formulário de Adoção - ONG</h4>
     </div>
     <!-- RADIUS -->
     <div class="mb-3">
            <label class="form-label d-block">Espécie</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="gato" type="radio" name="especie" data-sb-validations="required" />
                <label class="form-check-label" for="gato">Gato</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="cachorro" type="radio" name="especie" data-sb-validations="required" />
                <label class="form-check-label" for="cachorro">Cachorro</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="porte:required">Preencha uma das opções.</div>
        </div>
       <!-- NOME -->
        <div class="mb-3">
            <label class="form-label" for="nomeDoAnimal">Nome do animal</label>
            <input class="form-control" id="nomeDoAnimal" type="text" placeholder="Digite o nome do animal" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nomeDoAnimal:required">Nome do animal é obrigatório.</div>
        </div>
        <!-- RAÇA -->
        <div class="mb-3">
            <label class="form-label" for="racaDoAnimal">Raça do animal</label>
            <input class="form-control" id="racaDoAnimal" type="text" placeholder="Digite a raça do animal" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="racaDoAnimal:required">Raça do animal é obrigatório.</div>
        </div>
        <!-- SEXO -->
        <div class="mb-3">
            <label class="form-label d-block">Sexo</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="macho" type="radio" name="sexo" data-sb-validations="required" />
                <label class="form-check-label" for="macho">Macho</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="femea" type="radio" name="sexo" data-sb-validations="required" />
                <label class="form-check-label" for="femea">Fêmea</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="sexo:required">Preencha uma das opções.</div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Porte</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="pequeno" type="radio" name="porte" data-sb-validations="required" />
                <label class="form-check-label" for="pequeno">Pequeno</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="medio" type="radio" name="porte" data-sb-validations="required" />
                <label class="form-check-label" for="medio">Médio</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="grande" type="radio" name="porte" data-sb-validations="required" />
                <label class="form-check-label" for="grande">Grande</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="porte:required">Preencha uma das opções.</div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Idade</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="filhote" type="radio" name="idade" data-sb-validations="required" />
                <label class="form-check-label" for="filhote">Filhote</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="adulto" type="radio" name="idade" data-sb-validations="required" />
                <label class="form-check-label" for="adulto">Adulto</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="idoso" type="radio" name="idade" data-sb-validations="required" />
                <label class="form-check-label" for="idoso">Idoso</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="porte:required">Preencha uma das opções.</div>
        </div>
       
        <div class="mb-3">
            <label class="form-label" for="caracteristicasFisicas">Características físicas</label>
            <input class="form-control" id="caracteristicasFisicas" type="text" placeholder="Cor do pelo e olhos, manchas, etc. " data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="caracteristicasFisicas:required">Características físicas é obrigatório.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="possuiProblemaDeSaudeEOuDeficiencia"> Possui problema de saúde e/ou deficiência?</label>
            <input class="form-control" id="possuiProblemaDeSaudeEOuDeficiencia" type="text" placeholder="Digite quais se houver" data-sb-validations="" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="tomaAlgumTipoDeMedicacao">Toma algum tipo de medicação?</label>
            <input class="form-control" id="tomaAlgumTipoDeMedicacao" type="text" placeholder="Digite quais se houver" data-sb-validations="" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="vacinasRecebidas">Vacinas recebidas</label>
            <input class="form-control" id="vacinasRecebidas" type="text" placeholder="Vacinas recebidas" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="vacinasRecebidas:required">Vacinas recebidas é obrigatório</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="comportamentoHabitosPersonalidadeEtc">Comportamento</label>
            <input class="form-control" id="comportamentoHabitosPersonalidadeEtc" type="text" placeholder="Hábitos, personalidade, etc" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="comportamentoHabitosPersonalidadeEtc:required">Comportamento é obrigatório.</div>
        </div>
       
        <div class="d-grid">
            <button class="btn btn-lg disabled" id="btn-violet" type="submit">Enviar</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
              
          
</body>
</html> 

