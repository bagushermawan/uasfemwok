<?= $this->extend('admin/layouts/admin_layouts_us') ?>

<?= $this->section('content') ?>

<!-- isi -->
              <div class="col-md-6">
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Edit User</h3>
                  </div>
                  <div class="card-body">
                      <form action="" method="post" id="text-editor">
                          <input type="hidden" name="id" value="<?= $users['id'] ?>" />
                    <div class="form-group">
                      <label>Nama:</label>
                      <input type="text" class="form-control" name="nama" value="<?= $users['nama'] ?>"/>
                    </div>
                    <div class="form-group">
                      <label>Username:</label>
                      <input type="text" class="form-control" name="username" value="<?= $users['username'] ?>"/>
                    </div>
                    <div class="form-group">
                      <label>Password:</label>
                      <input type="password" class="form-control" name="password" value="<?= $users['password'] ?>"/>
                    </div>
                    <!-- /.form group -->
                    <!-- jumlah -->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Role:</label>
                      <select class="form-control" style="width: 100%" name="role">
                        <option value="<?= $users['role'] ?>"><?= $users['role'] ?></option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
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
                      <button type="submit"class="btn btn-block btn-success btn-lg"style="width: 50%">
                        Update
                      </button>
                    </center>
                  </div>
                </div>
                      </form>

              </div>
              <?= $this->endSection() ?>
