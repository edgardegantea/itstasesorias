<?= $this->extend('usuario/template/layout'); ?>

<?= $this->section('content'); ?>

    <div class="d-flex w-100 h-100 p-3 mx-auto flex-column mb-auto">

        <header class="mb-auto h-100 py-4">
        </header>
        <header class="mb-auto h-100 py-4">
        </header>

        <div class="text-center">
            <p class="lead">Sistema de Asesorías</p>
            <p class="">
                <a href="login" class="btn btn-lg"
                   style="color: #062026; background-color: darkorange; height: 50px; width: 300px">Ingresar</a>
            </p>
        </div>

        <div class="mt-5 text-center">
            <p class="mt-5 lead text-light mt-5" style="font-size: medium">Si no estás registrado da clic en el siguiente botón para darte de alta</p>
            <p class="lead">
                <a href="registro/new" class="btn btn-lg btn-light fw-bold border-white bg-white"
                   style="color: #062026; height: 50px; width: 300px">Darme de alta</a>
            </p>
        </div>
    </div>
<?= $this->endSection(); ?>