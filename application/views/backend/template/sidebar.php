<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url('assets/template/backend/dist') ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('assets/template/backend/dist') ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="<?= site_url('Pasien/') ?>" class="nav-link">
                        <i class="nav-icon fas fa-briefcase-medical"></i>
                        <p>
                            Pasien
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('Antrian/') ?>" class="nav-link">
                        <i class="nav-icon fas fa-file-medical"></i>
                        <p>
                            Antrian
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('Dokter/') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>
                            Jadwal Dokter
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</aside>