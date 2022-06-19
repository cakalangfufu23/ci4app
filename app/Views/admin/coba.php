<?= $this->extend('layout/templateb'); ?>
<?= $this->section('content'); ?>


    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">User Detaill</h2>
        <div class="row">
          <div class="col-lg-9">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="<?= base_url('/userfoto/' . $user->user_image); ?>" class="img-fluid rounded-start" alt="<?= $user->fullname; ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><h2><?= $user->username; ?></h2></li><br><br>
                            <li class="list-group-item"><?= $user->fullname; ?></li><br>
                            <li class="list-group-item"><?= $user->email; ?></li><br>
                            <li class="list-group-item"><span class="badge-<?= ($user->name == 'admin') ? 'success' : 'pending'?>"><?= $user->name; ?></span></li>
                            <li class="list-group-item"><small><?= $user->description; ?></small></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<?= $this->endSection(); ?>
    