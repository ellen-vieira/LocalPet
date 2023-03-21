<?php
include "conn/connect.php";
// INICIA A VERIFICAÇÃO DO LOGIN
if ($_POST) {
  $email = $_POST['email_usuario'];
  $senha = $_POST['senha_usuario'];
  $emailRes = $conn->query("select * from usuarios where email = '$email' and senha = '$senha' ");
  $rowNome = $emailRes->fetch_assoc();
  $numRow = mysqli_num_rows($emailRes);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/adminlogin.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Login</title>
</head>

<body>
  <div class="login-root">
    <!-- COR DO FUNDO -->
    <div class="loginbackground box-background--laranja padding-top--64">
    </div>
    <!-- CAIXA DE LOGIN -->
    <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
      <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
        <!-- LOGO -->
        <img class="ms-4" src="images/localpet.png" alt="" width="200" height="200">
      </div>
      <div class="formbg-outer">
        <div class="formbg">
          <div class="formbg-inner padding-horizontal--48">
            <span class="padding-bottom--15">Faça seu login
            </span>
            <form id="form_login" action="login.php" name="form_login" method="POST" enctype="multipart/form-data">
              <!-- EMAIL -->
              <div class="field padding-bottom--24">
                <label for="email_usuario">Email</label>
                <input type="email_usuario" name="email_usuario">
              </div>
              <!-- SENHA -->
              <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="senha_usuario">Senha</label>
                  <div class="reset-pass">
                  </div>
                </div>
                <input type="password" name="senha_usuario">
              </div>
              <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
              </div>
              <div class="field padding-bottom--24">
                <input type="submit" name="submit" value="Continuar">
              </div>
            </form>
          </div>
        </div>
        <div class="footer-link padding-top--24">
          <span>Não tem uma conta? <a href="usuarios_insere.php">Inscrever-se</a></span>
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