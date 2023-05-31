<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
<head>
    <script src="<?php echo base_url('assets/bootstrap/dist/js/color-modes.js'); ?>"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Sticky Footer Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sticky-footer/">


    <link href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
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
            width: 100%;
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

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/bootstrap/dist/css/sticky-footer.css'); ?>" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
    </symbol>
</svg>

<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
            id="bd-theme"
            type="button"
            aria-expanded="false"
            data-bs-toggle="dropdown"
            aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
            <use href="#circle-half"></use>
        </svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                    <use href="#sun-fill"></use>
                </svg>
                Light
                <svg class="bi ms-auto d-none" width="1em" height="1em">
                    <use href="#check2"></use>
                </svg>
            </button>
        </li>
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                    <use href="#moon-stars-fill"></use>
                </svg>
                Dark
                <svg class="bi ms-auto d-none" width="1em" height="1em">
                    <use href="#check2"></use>
                </svg>
            </button>
        </li>
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                    <use href="#circle-half"></use>
                </svg>
                Auto
                <svg class="bi ms-auto d-none" width="1em" height="1em">
                    <use href="#check2"></use>
                </svg>
            </button>
        </li>
    </ul>
</div>


<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <header class="jumbotron mb-5">
            <h1>Formulario de registro para sistema de asesorías</h1>
        </header>


        <div class="">
            <?php $validation = \Config\Services::validation(); ?>
        </div>


        <form method="POST" action="<?= base_url('admin/estudiantes') ?>" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="card">
                <!--
                <div class="card-header">
                    <h5 class="card-title">Crear usuario</h5> -->

                    <!-- <div class="col-xl-12 text-end">
                        <a href="<?= base_url('admin/estudiantes') ?>" class="btn btn-danger">Cancelar y regresar</a>
                    </div> -->
                <!-- </div> -->



                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3 has-validation">
                                <label class="form-label">NÚMERO DE CONTROL:</label>
                                <input type="text"
                                       class="form-control <?php if ($validation->getError('numControl')): ?>is-invalid<?php endif ?>"
                                       name="numControl" placeholder="22TE..."
                                       value="<?php echo set_value('numControl'); ?>"/>
                                <?php if ($validation->getError('numControl')): ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('numControl') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3 has-validation">
                                <label class="form-label">Carerra:</label>
                                <select class="form-select" name="carrera" id="">
                                    <?php foreach ($carreras as $carrera): ?>
                                        <option value="<?= $carrera['id'] ?>"><?= $carrera['nombre'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3 has-validation">
                                <label class="form-label">Sexo:</label>
                                <select class="form-select" name="sexo" id="">
                                    <option value="Mujer">Mujer</option>
                                    <option value="Hombre">Hombre</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3 has-validation">
                                <label class="form-label">Nombre (s):</label>
                                <input type="text"
                                       class="form-control <?php if ($validation->getError('nombre')): ?>is-invalid<?php endif ?>"
                                       name="nombre" placeholder="Tu nombre"
                                       value="<?php echo set_value('nombre'); ?>"/>
                                <?php if ($validation->getError('nombre')): ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nombre') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group mb-3 has-validation">
                                <label class="form-label">Apellido Paterno:</label>
                                <input type="text"
                                       class="form-control <?php if ($validation->getError('apaterno')): ?>is-invalid<?php endif ?>"
                                       name="apaterno"
                                       placeholder="Tu apellido paterno" value="<?php echo set_value('apaterno'); ?>"/>
                                <?php if ($validation->getError('apaterno')): ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('apaterno') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3 has-validation">
                                <label class="form-label">Apellido materno:</label>
                                <input type="text"
                                       class="form-control <?php if ($validation->getError('amaterno')): ?>is-invalid<?php endif ?>"
                                       name="amaterno" placeholder="Tu apellido materno"
                                       value="<?php echo set_value('amaterno'); ?>"/>
                                <?php if ($validation->getError('amaterno')): ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('amaterno') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col md-4">
                            <div class="form-group mb-3 has-validation">
                                <label class="form-label">Correo electrónico:</label>
                                <input type="email"
                                       class="form-control <?php if ($validation->getError('email')): ?>is-invalid<?php endif ?>"
                                       name="email" placeholder="Tu correo electrónico"
                                       value="<?php echo set_value('email'); ?>"/>
                                <?php if ($validation->getError('email')): ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col md-4">
                            <div class="form-group mb-3 has-validation">
                                <label class="form-label">Contraseña:</label>
                                <input type="password"
                                       class="form-control <?php if ($validation->getError('password')): ?>is-invalid<?php endif ?>"
                                       name="password" placeholder="Tu contraseña"
                                       value="<?php echo set_value('password'); ?>"/>
                                <?php if ($validation->getError('password')): ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3 has-validation">
                                <label class="form-label">Foto:</label>
                                <input type="file"
                                       class="form-control <?php if ($validation->getError('foto')): ?>is-invalid<?php endif ?>"
                                       name="foto" placeholder="Sube tu foto" value="<?php echo set_value('foto'); ?>"/>
                                <?php if ($validation->getError('foto')): ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('foto') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="form-label">Información acerca de tí:</label>
                                <textarea
                                        class="form-control <?php if ($validation->getError('description')): ?>is-invalid<?php endif ?>"
                                        name="bio"
                                        placeholder="Coméntanos sobre tí"><?php echo set_value('bio'); ?></textarea>
                                <?php if ($validation->getError('bio')): ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('bio') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <input type="reset" value="Restablecer" class="btn btn-default">
                    <button type="submit" class="btn btn-primary float-right">Guardar</button>
                </div>
            </div>

        </form>


    </div>
</main>

<footer class="footer mt-auto py-3 bg-body-tertiary">
    <div class="container">
        <span class="text-body-secondary">Developed by EdgarDegante for Tec de Teziutlán. 2023.</span>
    </div>
</footer>
<script src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
<script>
    $(function () {
        <?php if (session()->has('success')) { ?>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Registro realizado con éxito',
            text: '<?= session('success'); ?>'
            showConfirmButton: false,
            timer: 1500
        })
        <?php } ?>

    });
</script>
</body>
</html>
