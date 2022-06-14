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
          <h2 class="card-header"><?=lang('Auth.register')?></h2>
          <?= view('Myth\Auth\Views\_message_block') ?>
          
          <form action="<?= route_to('register') ?>" method="post">
            <?= csrf_field() ?>
              
              <div class="inputBox">
                <input type="text" name="username" class="<?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>"/>
              </div>

              <div class="inputBox">
                <input type="email" name="email" class="<?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>"/>
                  <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
              </div>
              
              <div class="inputBox">
                <input type="password" name="password" class="<?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off"/>
              </div>

              <div class="inputBox">
                <input type="password" name="pass_confirm" class="<?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off" />
              </div>

              <div class="tombol">
                  <div class="inputBox">
                  <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register')?></button>
                    </div>
                </div>

              <!-- <p class="forget">Forgot Password ? <a href="#">Click Here</a></p> -->
              <p class="forget"><?=lang('Auth.alreadyRegistered')?> <a href="<?= route_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
            </form>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection(); ?>