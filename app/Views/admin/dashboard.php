<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('content'); ?>
    <!-- <h1>Panel de control de <?= session()->get('nombre'); ?></h1> -->


    <div class="card">
        <div class="card-header text-center">
            Últimos registros
        </div>
        <div class="card-body">
            <table>
                
            </table>
        </div>
        <div class="card-footer"></div>
    </div>

    <div class="card">
        <div class="card-header text-center">
            Acciones rápidas
        </div>
    

    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body">
                        <p class="text-uppercase text-center">Docentes</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-navy">
                    <div class="card-body">
                        <p class="text-uppercase text-center">Estudiantes</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark">
                    <div class="card-body">
                        <p class="text-uppercase text-center">Carreras</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?= $this->endSection(); ?>