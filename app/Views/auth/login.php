<?= $this->extend('layout/templatel'); ?>
<?= $this->section('content'); ?>
<section>
      <div class="color"></div>
      <div class="color"></div>
      <div class="color"></div>
      <div class="box">
        <div class="square" style="--i: 0"></div>
        <div class="square" style="--i: 1"></div>
        <div class="square" style="--i: 2"></div>
        <div class="square" style="--i: 3"></div>
        <div class="square" style="--i: 4"></div>
        <div class="container">
          <div class="form">
          <h2 class="card-header"><?=lang('Auth.loginTitle')?></h2>
          <?= view('Myth\Auth\Views\_message_block') ?>

          <form action="<?= route_to('login') ?>" method="post">
						<?= csrf_field() ?>

<?php if ($config->validFields === ['email']): ?>
              <div class="inputBox">
                <input type="email" name="login" class="<?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.email')?>" />
                  <div class="invalid-feedback">
                    <?= session('errors.login') ?>
                  </div>
              </div>
<?php else: ?>   
              <div class="inputBox">
                <input type="email" name="login" class="<?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.emailOrUsername')?>" />
                  <div class="invalid-feedback">
                    <?= session('errors.login') ?>
                  </div>
              </div>
<?php endif; ?>

              <div class="inputBox">
                <input type="password" name="password" class="<?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" />
                  <div class="invalid-feedback">
                    <?= session('errors.password') ?>
                  </div>
              </div>

<?php if ($config->allowRemembering): ?>
						<div class="inputBox">
							<label class="form-check-label">
								<input type="checkbox" name="remember" class="form-check-input" <?php if(old('remember')) : ?> checked <?php endif ?>>
								<?=lang('Auth.rememberMe')?>
							</label>
						</div>
<?php endif; ?>

              <div class="inputBox">
                <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.loginAction')?></button>
              </div>
              
<?php if ($config->allowRegistration) : ?>
					<p><a href="<?= route_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
<?php endif; ?>
<?php if ($config->activeResetter): ?>
					<p><a href="<?= route_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
<?php endif; ?>
            </form>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection(); ?>