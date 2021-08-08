<?= $this->extend('admin/layouts/admin_layouts_us') ?>

<?= $this->section('content') ?>
<?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
<!-- isi -->
              <div class="col-md-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Tambah User</h3>
                  </div>
                  <div class="card-body">
                      <form action="<?= site_url('/usersadmin/store') ?>" method="post" id="text-editor">
                    <div class="form-group">
                      <label>Nama:</label>
                      <input type="text" class="form-control" name="nama" placeholder="Markus Jon"/>
                    </div>
                    <div class="form-group">
                      <label>Username:</label>
                      <input type="text" class="form-control" name="username"/>
                    </div>
                    <div class="form-group">
                      <label>Password:</label>
                      <input type="password" class="form-control" name="password"/>
                    </div>
                    <!-- /.form group -->
                    <!-- jumlah -->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Role:</label>
                      <select class="form-control" style="width: 100%" name="role">
                        <option value="1" name="role">Admin</option>
                        <option value="2" name="role">User</option>
                      </select>
                    </div>
                  </div>
                  <!-- <div class="card-footer">
                  Visit
                  <a href="https://getdatepicker.com/5-4/">tempusdominus </a>
                  for more examples and information about the plugin.
                </div> -->
                  <!-- /.card-body -->
                  <div class="form-group">
                    <center>
                      <button type="submit"class="btn btn-block btn-primary btn-lg"style="width: 50%">
                        Tambah
                      </button>
                    </center>
                  </div>
                </div>
                      </form>

              </div>
              <?= $this->endSection() ?>
