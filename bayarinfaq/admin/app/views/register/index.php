<div class=" mt-5">
    <div class="mt-3">
        <div class="row">
            <div class="col-lg-6">

            </div>
        </div>

        <div class="vh-100 mt-12">

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
                                            <h4 class="text-center mb-4">Registrasi</h4>
                                            <form action="<?= BASEURL; ?>/register/tambah " method="post">
                                                <div class="mb-3">
                                                    <label for="nama" class="mb-1">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="username" class="mb-1">Username</label>
                                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password" class="mb-1">password</label>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password2" class="form-label">Konfirmasi Password</label>
                                                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi Password" required>
                                                </div>
                                                <div class="row d-flex justify-content-between mt-4 mb-2">
                                                    <div class="mb-3">
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary btn-block ">Register</button>
                                                </div>
                                            </form>
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
</div>