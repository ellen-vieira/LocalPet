<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <title>Formulário de Adoção - ONG</title>
</head>
<body>
<div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="mb-3">
            <label class="form-label" for="nomeDoAnimal">Nome do animal</label>
            <input class="form-control" id="nomeDoAnimal" type="text" placeholder="Digite o nome do animal" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nomeDoAnimal:required">Nome do animal é obrigatório.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="racaDoAnimal">Raça do animal</label>
            <input class="form-control" id="racaDoAnimal" type="text" placeholder="Digite a raça do animal" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="racaDoAnimal:required">Raça do animal é obrigatório.</div>
        </div>
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
            <label class="form-label" for="idadeDoAnimal">Idade do animal</label>
            <input class="form-control" id="idadeDoAnimal" type="text" placeholder="Idade do animal" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="idadeDoAnimal:required">Idade do animal é obrigatório.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="caracteristicasFisicas">Características físicas</label>
            <input class="form-control" id="caracteristicasFisicas" type="text" placeholder="Cor do pelo e olhos, manchas, etc. " data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="caracteristicasFisicas:required">Características físicas é obrigatório.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="possuiProblemaDeSaudeEOuDeficiencia"> Possui problema de saúde e/ou deficiência?</label>
            <input class="form-control" id="possuiProblemaDeSaudeEOuDeficiencia" type="text" placeholder=" Possui problema de saúde e/ou deficiência?" data-sb-validations="" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="tomaAlgumTipoDeMedicacao">Toma algum tipo de medicação?</label>
            <input class="form-control" id="tomaAlgumTipoDeMedicacao" type="text" placeholder="Toma algum tipo de medicação?" data-sb-validations="" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="vacinasRecebidas">Vacinas recebidas</label>
            <input class="form-control" id="vacinasRecebidas" type="text" placeholder="Vacinas  recebidas" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="vacinasRecebidas:required">Vacinas recebidas é obrigatório</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="comportamentoHabitosPersonalidadeEtc">Comportamento</label>
            <input class="form-control" id="comportamentoHabitosPersonalidadeEtc" type="text" placeholder="Hábitos, personalidade, etc)" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="comportamentoHabitosPersonalidadeEtc:required">Comportamento é obrigatório.</div>
        </div>
       
        <div class="d-grid">
            <button class="btn btn-danger btn-lg disabled" id="submitButton" type="submit">Enviar</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
              
          
</body>
</html> 

