<body>
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('<?= base_url('assets_auth/') ?>images/bg.jpg');"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <img width="350" src="<?= base_url('assets_user/') ?>themes/images/melodi.png" class="site_logo" alt="">
                        <!-- <h3>Login to <strong>Melodi Music</strong></h3> -->
                        <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
                        <?= $this->session->flashdata('message'); ?>
                        <form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">
                            <div class="form-group first">
                                <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="nama" placeholder="Your Name">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <input type="text" name="email" value="<?= set_value('email'); ?>" class="form-control form-control-user" id="email" placeholder="Email Adress">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password1" value="<?= set_value('password'); ?>" class="form-control form-control-user" id="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="password2" value="<?= set_value('password'); ?>" class="form-control form-control-user" id="password2" placeholder="Confirm Password">
                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Create
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('Auth'); ?>">
                                Already have an account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>