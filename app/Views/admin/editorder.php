<?= $this->extend('admin/layouts/admin_layouts_or') ?>

<?= $this->section('content') ?>

<!-- isi -->
              <div class="col-md-6">
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Edit Order</h3>
                  </div>
                  <div class="card-body">
                      <form action="" method="post" id="text-editor">
                          <input type="hidden" name="id" value="<?= $orders['id'] ?>" />
                    <div class="form-group">
                      <label>Nama:</label>
                      <input type="text" class="form-control" name="nama" value="<?= $orders['nama'] ?>"/>
                    </div>
                    <div class="form-group">
                      <label>Tujuan:</label>
                      <!-- <input type="text" class="form-control" name="tujuan" value="<?= $orders['tujuan'] ?>"/> -->
                      <select class="form-control select2" style="width: 100%" name="tujuan">
                        <option value="<?= $orders['tujuan'] ?>"><?= $orders['tujuan'] ?></option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Bali">Bali</option>
                        <option value="Jogja">Jogja</option>
                        <option value="Makasar">Makasar</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pulang:</label>
                      <input type="date" class="form-control" name="pulang" value="<?= $orders['pulang'] ?>"/>
                    </div>
                    <div class="form-group">
                      <label>Pergi:</label>
                      <input type="date" class="form-control" name="pergi" value="<?= $orders['pergi'] ?>"/>
                    </div>
                    <div class="form-group">
                      <label>Jumlah:</label>
                      <input type="text" class="form-control" name="jumlah" value="<?= $orders['jumlah'] ?>"/>
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
