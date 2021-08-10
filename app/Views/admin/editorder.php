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
                      <label>Dari:</label>
                      <input type="text" class="form-control" name="dari" value="<?= $orders['dari'] ?>"/>
                    </div>
                    <div class="form-group">
                      <label>Ke:</label>
                      <!-- <input type="text" class="form-control" name="tujuan" value="<?= $orders['ke'] ?>"/> -->
                      <select class="form-control" style="width: 100%" name="ke">
                        <option value="<?= $orders['ke'] ?>"><?= $orders['ke'] ?></option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bali">Bali</option>
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
                      <label>Maskapai:</label>
                      <select class="form-control" style="width: 100%" name="maskapai">
                        <option value="<?= $orders['maskapai'] ?>"><?= $orders['maskapai'] ?></option>
                        <option value="Banteng Airlines">Banteng Airlines</option>
                        <option value="Beringin Airlines">Beringin Airlines</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Room:</label>
                      <select class="form-control" style="width: 100%" name="room">
                        <option value="<?= $orders['room'] ?>"><?= $orders['room'] ?></option>
                        <option value="Depan">Depan</option>
                        <option value="Tengah">Tengah</option>
                        <option value="Belakang">Belakang</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Jumlah:</label>
                      <input type="text" class="form-control" name="jumlah" value="<?= $orders['jumlah'] ?>"/>
                    </div>
                    <div class="form-group">
                      <label>Kelas:</label>
                      <select class="form-control" style="width: 100%" name="kelas">
                        <option value="<?= $orders['kelas'] ?>"><?= $orders['kelas'] ?></option>
                        <option value="Ekonomi">Ekonomi</option>
                        <option value="Bisnis">Bisnis</option>
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
