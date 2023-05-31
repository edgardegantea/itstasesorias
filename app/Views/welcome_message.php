<?= $this->extend('usuario/template/layout'); ?>

<?= $this->section('content'); ?>

  <div class="text-center">
    <p class="lead">Bienvenido al Sistema de Asesorías.</p>
    <p class="">
      <a href="login" class="btn btn-lg" style="color: #062026; background-color: darkorange; height: 50px; width: 300px">Ingresar</a>
    </p>


    <p class="mt-5 lead">Si no estás registrado da clic en el siguiente enlace para darte de alta</p>
    <p class="lead">
    <a href="registro/new" class="btn btn-lg btn-light fw-bold border-white bg-white" style="color: #062026; height: 50px; width: 300px">Darme de alta</a>
    </p>
    </div>
<?= $this->endSection(); ?>