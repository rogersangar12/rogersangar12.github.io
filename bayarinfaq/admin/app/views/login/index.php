<div class=" mt-5">
  <div class="mt-3">
    <div class="vh-100">
      <div class="authincation h-100">
        <div class="container h-100">
          <div class="col-lg-6">
            <?php Flasher::flash(); ?>
          </div>
          <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
              <div class="authincation-content">
                <div class="row no-gutters">
                  <div class="col-xl-12">
                    <div class="auth-form">
                      <div class="text-center mb-3">
                        <i class="bi bi-person-circle fa-3x"></i>
                      </div>
                      <h4 class="text-center mb-4">Login</h4>
                      <form action="<?= BASEURL; ?>/login/checking" method="post">
                        <div class="mb-3">
                          <label class="mb-1" for="username"><strong>Username</strong></label>
                          <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" placeholder="Username" required>
                        </div>
                        <div class="mb-3">
                          <label for="password" class="mb-1">Password</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="row d-flex justify-content-between mt-4 mb-2">
                          <div class="mb-3">
                          </div>
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary btn-block ">Login</button>
                        </div>
                      </form>
                      <div class="new-account mt-3">
                        <p><a class="text-primary" href="<?= BASEURL; ?>/home">Kembali</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>