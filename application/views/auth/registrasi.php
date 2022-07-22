<?php $this->load->view('layout/auth_header') ?>
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Halaman</b>Registrasi</a>
    </div>
    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>
            <form action="<?= base_url('auth/registrasi'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="nama" value="<?= set_value('nama'); ?>" id="nama" class="form-control" placeholder="Full name">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" value="<?= set_value('email'); ?>" id="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password1" id="password1" class="form-control" placeholder="Password">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" id="password2" name="password2" class="form-control" placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>

                </div>
            </form>
            <a href="<?= base_url('auth'); ?>" class="text-center">I already have a membership</a>
        </div>

    </div>
</div>
<?php $this->load->view('layout/auth_footer') ?>