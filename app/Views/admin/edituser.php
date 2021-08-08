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
                    <!-- Date -->
                    <div class="form-group">
                      <label>Pergi:</label>
                      <input type="date" class="form-control" name="tgl_lahir" value="<?= $users['tgl_lahir'] ?>"/>
                    </div>
                    <!-- /.form group -->
                    <!-- jumlah -->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Umur:</label>
                      <input type="text"class="form-control"placeholder="1" name="umur" value="<?= $users['umur'] ?>"/>
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
