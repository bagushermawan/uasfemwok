<?= $this->extend('admin/layouts/login') ?>

<?= $this->section('content') ?>
<!-- isi -->
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <form class="user">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user"id="exampleInputEmail"placeholder="Nama Lengkap"/>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user"id="exampleInputEmail"placeholder="Username"/>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password"class="form-control form-control-user"id="exampleInputPassword"placeholder="Password"/>
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password"/>
                    </div>
                  </div>
                  <a href="login.html"class="btn btn-primary btn-user btn-block">Register Account</a>
                  <hr />
                </form>
                <div class="text-center">
                  <a class="small" href="login.html">Already have an account? Login!</a>
                </div>
              </div>
            </div>
          </div>
          <!-- end isi -->

<?= $this->endSection() ?>