<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>ÁREA DA ONG</title>
    <!-- LINKS BOOTSTRAP -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/features/">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- ESTILO -->
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
<?php include '../login/header_login.php'; ?>

<body>
    <div class="container px-4 py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">ÁREA DA ONG</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <h3 class="fs-2">ONG</h3>
                <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group">
                    </div><!-- fecha btn-group -->
                    <div class="btn-group">
                        <a href="ongs_insere.php">
                            <button class="btn btn-danger">
                                INSERIR
                            </button>
                        </a>
                    </div><!-- fecha btn-group -->
                </div><!-- fecha btn-group-justified -->
            </div>
            <div class="feature col">
                <h3 class="fs-2">ANIMAIS</h3>
                <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group">
                        <a href="animais_lista.php">
                            <button class="btn btn-danger">
                                LISTAR
                            </button>
                        </a>
                    </div><!-- fecha btn-group -->

                    <div class="btn-group">
                        <a href="animais_ong_insere.php">
                            <button class="btn btn-danger">
                                INSERIR
                            </button>
                        </a>
                    </div><!-- fecha btn-group -->
                </div><!-- fecha btn-group-justified -->
                </a>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>