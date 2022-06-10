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
            <h2>Register Form</h2>
            <form action="">
              <div class="inputBox">
                <input type="text" placeholder="Name" />
              </div>
              <div class="inputBox">
                <input type="email" placeholder="Email" />
              </div>
              <div class="inputBox">
                <input type="password" placeholder="Password" />
              </div>
              <div class="inputBox">
                <input type="password" placeholder="Repeat Password" />
              </div>
              <div class="tombol">
                  <div class="inputBox">
                      <input type="reset" value="Cancel" />
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Register" />
                    </div>
                </div>

              <!-- <p class="forget">Forgot Password ? <a href="#">Click Here</a></p> -->
              <p class="forget">Have an account ? <a href="/home">Login</a></p>
            </form>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection(); ?>