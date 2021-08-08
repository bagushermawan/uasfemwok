<?= $this->extend('admin/layouts/login') ?>

<?= $this->section('content') ?>
<!-- isi -->
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                    </div>
                    <form class="user">
                      <div class="form-group">
                        <input type="text"class="form-control form-control-user"id="exampleInputEmail"aria-describedby="emailHelp"placeholder="Enter Username..."/>
                      </div>
                      <div class="form-group">
                        <input type="password"class="form-control form-control-user"id="exampleInputPassword"placeholder="Password"/>
                      </div>
                      <a href="index.html"class="btn btn-primary btn-user btn-block">Login</a>
                      <hr />
                    </form>
                    <div class="text-center">
                      <a class="small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                      <a class="small" href="register.html">Create an Account!</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end isi -->

<?= $this->endSection() ?>