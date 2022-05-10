<?= $this->extend('auth/templates/layout'); ?>

<?= $this->section('content'); ?>
<div id="auth">

    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="index.html"><img src="<?= base_url() ?>/mazer/dist/assets/images/logo/logo.png" alt="Logo"></a>
                </div>
                <h1 class="auth-title"><?= lang('Auth.loginTitle') ?></h1>
                <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

                <?= view('Myth\Auth\Views\_message_block') ?>

                <form action="<?= route_to('login') ?>" method="post">
                    <?= csrf_field() ?>

                    <?php if ($config->validFields === ['email']) : ?>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" name="password" class="form-control form-control-xl <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>
                    </div>

                    <?php if ($config->allowRemembering) : ?>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" id="flexCheckDefault" <?php if (old('remember')) : ?> checked <?php endif ?>>
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                <?= lang('Auth.rememberMe') ?>
                            </label>
                        </div>
                    <?php endif; ?>

                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5"><?= lang('Auth.loginAction') ?></button>
                </form>

                <div class="text-center mt-5 text-lg fs-4">
                    <?php if ($config->allowRegistration) : ?>
                        <p class="text-gray-600">Don't have an account? <a href="<?= route_to('register') ?>" class="font-bold"><?= lang('Auth.needAnAccount') ?></a>.</p>
                    <?php endif; ?>
                    <?php if ($config->activeResetter) : ?>
                        <p><a class="font-bold" href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a>.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>