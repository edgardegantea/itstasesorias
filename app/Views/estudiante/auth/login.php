<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar sesión</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/sign-in.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="<?php echo base_url('assets/img/logo/upn-logo-tez.jpg'); ?>" sizes="32x32" type="image/png">
    <link rel="icon" href="<?php echo base_url('assets/img/logo/upn-logo-tez.jpg'); ?>" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="<?php echo base_url('assets/img/logo/upn-logo-tez.jpg'); ?>">
    <meta name="theme-color" content="#712cf9">

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

<!-- <body class="text-center" style="background-color: #0a53be"> -->
<body class="text-center" style="background-color: #062026">
    <main class="form-signin w-100 m-auto">

            <?php if (isset($validation)) : ?>
                <div class="">
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                    </div>
                </div>
            <?php endif; ?>


            <form class="" action="<?= base_url('estudianteLogin'); ?>" method="post">

                <!-- <img style="outline: none" class="mb-4" src="<?php echo base_url('assets/img/logo/upnlogotez.jpg'); ?>" alt="" width="200"> -->

               <!-- <h2 class="mb-5">Evaluación docente</h2> -->

               <div class="mb-5 text-white">
                    <h2>Sistema de asesorías</h1>
                    <h4>Ciencias Básicas</h4>
                    <p>Instituto Tecnológico Superior de Teziutlán</p>
               </div>

                <h1 class="h3 mb-3 fw-normal" style="color: white">Iniciar sesión</h1>

                <div class="form-floating">
                    <input type="text" name="numControl" class="form-control" id="floatingInput"
                           placeholder="Número de control">
                    <label for="floatingInput">Número de control</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword"
                           placeholder="Contraseña">
                    <label for="floatingPassword">Contraseña</label>
                </div>

                <!--
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme
          </label>
        </div>
        -->

                <button class="w-100 btn btn-lg btn-light" style="color: navy;" type="submit">Ingresar</button>

            </form>



            <div class="mt-5 text-white">
                Si no tienes una cuenta regístrate <a class="text-white badge bg-primary link-offset-2 link-underline link-underline-opacity-0" href="<?= base_url('registro/new') ?>">AQUÍ</a>
            </div>


        </main>

</body>

</html>