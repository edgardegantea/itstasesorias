<!-- INICIO DE ASIDE -->
<aside class="main-sidebar sidebar-dark-navy elevation-4 active bg-navy">

    <a href="<?= base_url('/admin'); ?>" class="brand-link" style="text-decoration: none">
        <!-- <img src="<?= base_url('assets/img/logo/upnloader.png'); ?>" alt="Dashboard" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">Ciencias Básicas</span>
    </a>

    <div class="sidebar">

        <div class="user-panel ml-1 mt-3 pb-1 mb-3 d-flex">
            <!--
            <div class="image text-center ml-2">
                <img src="<?= base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle elevation-2" title="<?= session()->get('nombre') ?> <?= session()->get('apaterno'); ?> <?= session()->get('amaterno') ?>">
            </div>
        -->
                <p class="text-light"><?= session()->get('nombre') ?> <?= session()->get('apaterno'); ?> <?= session()->get('amaterno') ?></p>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                <li class="nav-header">ASESORÍAS</li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/asesorias') ?>" class="nav-link">
                        <i style="color: darkorange;" class="fas fa-circle nav-icon"></i>
                        <p>ASESORÍAS</p>
                    </a>
                </li>



                <li class="nav-header">PRINCIPAL</li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/usuarios'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/profesores'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profesores</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/asignaturas'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-bookmark"></i>
                        <p>Asignaturas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/estudiantes'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Estudiantes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/sedes'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-school"></i>
                        <p>Sedes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/carreras'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Carreras</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/modalidades'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-voicemail"></i>
                        <p>Modalidades</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/dimensiones'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-cube"></i>
                        <p>Dimensiones</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/preguntas'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-question"></i>
                        <p>Preguntas de evaluación</p>
                    </a>
                </li>
                
            </ul>
        </nav>

    </div>

</aside>

<!-- FIN DE ASIDE -->