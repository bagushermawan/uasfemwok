<?= $this->extend('admin/layouts/login') ?>

<?= $this->section('content') ?>
<!-- isi -->
        <?php 
            $session = session();
            $login = $session->getFlashdata('login');
            $username = $session->getFlashdata('username');
            $password = $session->getFlashdata('password');
        ?>
        
        <?php if($username){ ?>
           <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <h6><?php echo $username?></h6>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>
        
        <?php if($password){ ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <h6><?php echo $password?></h6>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>
        
        <?php if($login){ ?>
           <div class="alert alert-success alert-dismissible fade show" role="alert">
               <h6><?php echo $login?></h6>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                    </div>
                    <form class="user"method="post" action="<?= site_url('auth/valid_login') ?>">
                      <div class="form-group">
                        <input type="text"class="form-control form-control-user"id="exampleInputEmail"aria-describedby="emailHelp"placeholder="Enter Username..." name="username"/>
                      </div>
                      <div class="form-group">
                        <input type="password"class="form-control form-control-user"id="exampleInputPassword"placeholder="Password" name="password"/>
                      </div>
                      <button type="submit" class="btn btn-primary btn-user btn-block" name="login">Login</button>
                      <hr />
                    </form>
                    <div class="text-center">
                      <a class="small" href="<?php echo site_url('auth/register'); ?>">Create an Account!</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end isi -->

<?= $this->endSection() ?>