<?= $this->extend('layout/templateb'); ?>
<?= $this->section('content'); ?>


    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">User List</h2>
        <div class="row">
          <div class="col-lg-9">
            <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                    <th>
                      <label class="users-table__checkbox ms-20">
                        <input type="checkbox" class="check-all">
                      </label>
                    </th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $user) : ?>
                  <tr>
                    <td>
                      <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                        <div class="pages-table-img">
                        <picture><source srcset="<?= base_url('userfoto') ?>/<?= $user->user_image; ?>" type="image/webp"><img src="<?= base_url('userfoto') ?>/<?= $user->user_image; ?>" alt="Nama Lengkap"></picture>
                        <?= $user->fullname; ?>
                      </div>
                      </label>
                    </td>
                    <td>
                      <?= $user->username; ?>
                    </td>
                    <td>
                      <?= $user->email; ?>
                    </td>
                    <td><span class="badge-<?= ($user->name == 'admin') ? 'success' : 'pending'?>"><?= $user->name; ?></span></td>
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <li><a href="<?= base_url('admin/' . $user->userid); ?>">Detail</a></li>
                          <li><a href="##">Quick edit</a></li>
                          <li><a href="##">Trash</a></li>
                        </ul>
                      </span>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          
        </div>
      </div>
    </main>

<?= $this->endSection(); ?>
    