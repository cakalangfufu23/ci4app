<?= $this->extend('layout/templateb'); ?>
<?= $this->section('content'); ?>


    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">User Detaill</h2>
        <div class="row">
          <div class="col-lg-9">
            <?php d($user); ?>
          </div>
          
        </div>
      </div>
    </main>

<?= $this->endSection(); ?>
    