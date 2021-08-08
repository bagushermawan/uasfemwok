<?= $this->extend('admin/layouts/login') ?>

<?= $this->section('content') ?>
<!-- isi -->
<?php 
            $session = session();
            $error = $session->getFlashdata('error');
        ?>
        
        <?php if($error){ ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                <ul>
                    <?php foreach($error as $e){ ?>
                    <li><?php echo $e ?></li>
                    <?php } ?>
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        <?php } ?>
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <form class="user" method="post" action="<?= site_url('auth/valid_register') ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user"id="exampleInputEmail"placeholder="Nama Lengkap" name="nama"/>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user"id="exampleInputEmail"placeholder="Username" name="username"/>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password"class="form-control form-control-user"id="exampleInputPassword"placeholder="Password" name="password"/>
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="confirm"/>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
                  <hr />
                </form>
                <div class="text-center">
                  <a class="small" href="<?php echo site_url('auth/login'); ?>">Already have an account? Login!</a>
                </div>
              </div>
            </div>
          </div>
          <!-- end isi -->

<?= $this->endSection() ?>