<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
  <!-- TITULO -->
  <title>Local Pet</title>
  <!-- LINK BOOTSTRAP -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
  <!-- ICON -->
  <link rel="icon" type="image/png" href="images/favicon.png" />
  <!-- DA ONDE VEM A COR DA HEADER -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- ESTILO HEADER -->
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>
</head>

<body id="corpo">
  <!-- LINK DOS ICONS -->
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <!-- HOME -->
    <symbol id="home" viewBox="0 0 16 16">
      <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
    </symbol>
    <!-- SOBRE -->
    <symbol id="speedometer2" viewBox="0 0 16 16">
      <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
    </symbol>
    <!-- ONGS -->
    <symbol id="table" viewBox="0 0 16 16">
      <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.51 2.51 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354L7.207 1Z" />
      <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Z" />
    </symbol>
    <!-- ACHADOS E PERDIDOS -->
    <symbol id="A&P" viewBox="0 0 16 16">
    <path d="M6.5 13a6.474 6.474 0 0 0 3.845-1.258h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.008 1.008 0 0 0-.115-.1A6.471 6.471 0 0 0 13 6.5 6.502 6.502 0 0 0 6.5 0a6.5 6.5 0 1 0 0 13Zm0-8.518c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
    </symbol>
    <!-- ADMIN -->
    <symbol id="people-circle" viewBox="0 0 16 16">
      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
    </symbol>
    <!-- ADOÇÃO -->
    <symbol id="grid" viewBox="0 0 16 16">
      <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM8.5 4h6l.5.667V5H1v-.333L1.5 4h6V1h1v3ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
    </symbol>
  </svg>
  <header>
    <!-- COR DA HEADER -->
    <div class="px-3 py-2 text-bg-danger rounded-bottom">
      <!-- CONTAINER HEADER -->
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <!-- LOGO -->
          <img src="images/localpet.png" alt="Local Pet" height="100px" width="100px">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
              <use xlink:href="#bootstrap" />
            </svg>
          </a>
          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <!-- HOME -->
            <li>
              <a href="home.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                  <use xlink:href="#home" />
                </svg>
                Home
              </a>
            </li>
            <!-- SOBRE -->
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                  <use xlink:href="#speedometer2" />
                </svg>
                Sobre
              </a>
            </li>
            <!-- ONGS -->
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                  <use xlink:href="#table" />
                </svg>
                ONGs
              </a>
            </li>
            <!-- ADOÇÃO -->
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                  <use xlink:href="#grid" />
                </svg>
                Adoção
              </a>
            </li>
            <!-- ACHADOS E PERDIDOS -->
            <li>
              <a href="#" class="nav-link text-white">
              <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                <use xlink:href="#A&P"/>
              </svg>
              A&P
              </a>
            </li>
            <!-- ADMIN -->
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                  <use xlink:href="#people-circle" />
                </svg>
                <span class="glyphicon glyphicon-user"></span>
                Admin
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- PROCURAR -->
    <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
          <input type="search" class="form-control" placeholder="Procurar..." aria-label="Search">
        </form>
        <!-- LOGIN -->
        <div class="text-end">
          <button type="button" class="btn btn-light text-dark me-2">Login</button>
          <button type="button" class="btn btn-danger">Cadastre-se</button>
        </div>
      </div>
    </div>
  </header>
  </main>

  <!-- CARROSSEL  -->
  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <!-- BANNER 1 -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/Banner.png" alt="" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <div class="container">
            <div class="carousel-caption text-start">
            </div>
          </div>
        </div>
        <!-- BANNER 2 -->
        <div class="carousel-item">
          <img src="images/Banner2.png" alt="" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <!-- BANNER 3 -->
        <div class="carousel-item">
          <img src="images/Banner3.png" alt="" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <div class="container">
            <div class="carousel-caption text-end">
            </div>
          </div>
        </div>
      </div>
      <!-- BOTÃO -->
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <!-- BOTÃO -->
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
    <br> <br>

    <!-- 3 COLUNAS DEPOIS DO CARROSSEL -->
    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img class="image" src="images/Icon.png" alt="ongs" width="80" height="80">
          <h2>ONGs</h2>
          <p> Conheça nosso espaço dedicado à ONGs. Se você for uma ONG/Protetor interessado em fazer parte dos nossos
            espaços, aqui poderá obter mais informações sobre como participar.</p>
          <br>
          <p><a class="btn btn-danger" href="ongs.php" role="button">SAIBA MAIS &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="image" src="images/Icon2.png" alt="adote" width="80" height="80">
          <h2>ADOTE</h2>
          <p> Conheça nosso espaço dedicado à adoção. Aqui você irá conhecer mais informçãoes sobre os cães e/ou gatos das
            ONGs/protetores parceiros que buscam um novo lar.</p>
          <br>
          <p><a class="btn btn-danger" href="adote.php" role="button">SAIBA MAIS &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="image" src="images/Icon3.png" alt="perdidos" width="80" height="80">
          <h2>ACHADOS E PERDIDOS</h2>
          <p>Conheça nosso espaço dedicado à animais perdidos e/ou que foram achados. Aqui você pode
            divulgar informações sobre o seu pet que foi perdido e/ou algum outro animalzinho que foi achado na rua e pode ser de alguém!
          </p>
          <p><a class="btn btn-danger" href="A&P.php" role="button">SAIBA MAIS &raquo;</a></p>
        </div>
      </div>

      <!-- INÍCIO FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
          <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-5">
          <img src="images/sobre.png" alt="" width="500" height="500">
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
          </svg>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
        <img src="images/A&P.png" alt="" width="500" height="500">
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
          </svg>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
        <img src="images/proteja.png" alt="" width="500" height="500">
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
          </svg>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- FIM FEATURETTES -->

    </div>


    <!-- RODAPÉ -->
    <footer class="container">
      <p class="float-end"><a href="#">Voltar</a></p>
      <p>&copy; 2023-Meraki, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>

  <!-- SCRIPT -->
  <script src="https://cdn.lordicon.com/ritcuqlt.js%22%3E"></script>
  <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>