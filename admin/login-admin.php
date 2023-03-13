<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/adminlogin.css">
    <title>Administrativo: Login</title>
</head>
<body>
<div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--laranja padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
        <img class="ms-4" src="../images/localpet.png" alt="" width="90" height="80" >

        <h1 id= "titulo">LocalPet</h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Faça login em sua conta
</span>
              <form id="stripe-login">
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input type="email" name="email">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Senha</label>
                    <div class="reset-pass">
                      <a href="#">Esqueceu sua senha?</a>
                    </div>
                  </div>
                  <input type="password" name="password">
                </div>
                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                  <label for="checkbox">
                    <input type="checkbox" name="checkbox"> Mantenha-se conectado
                  </label>
                </div>
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Continuar">
                </div>
                <!--  LOGIN COM GOOGLE
                  <div class="field">
                  <a class="ssolink" href="#"> Use logon único (Google) em vez disso.</a>
                </div> -->
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--24">
            <span>Não tem uma conta? <a href="../usuario.php">Inscrever-se</a></span>
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="#">©Meraki</a> </span>
              <span><a href="#">Contatos</a></span>
              <span><a href="#">Privacidade e termos</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
