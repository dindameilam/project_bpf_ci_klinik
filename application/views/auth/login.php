<?php $this->load->view('layout/auth_header') ?>
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Halaman</b>Login</a>
    </div>

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <?= $this->session->flashdata('message'); ?>
            <form class="user" action="<?= base_url('auth'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="email" value="<?= set_value('email'); ?>" id="email" name="email" class="form-control" placeholder="Email">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" value="<?= set_value('password'); ?>" id="password" name="password" class="form-control" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>

                </div>
            </form>
            <div class="social-auth-links text-center mb-3">
            </div>
            <p class="mb-0">
                <a href="<?= base_url(); ?>auth/registrasi" class="text-center">Buat Akun!</a>
            </p>
        </div>

    </div>
</div>
<?php $this->load->view('layout/auth_footer') ?>