<?= $this->extend('admin/layouts/admin_layouts_or') ?>

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
                    <h3 class="card-title">Tambah Order</h3>
                  </div>
                  <div class="card-body">
                      <form action="<?= site_url('/ordersadmin/store') ?>" method="post" id="text-editor">
                    <div class="form-group">
                      <label>Dari:</label>
                      <input type="text" class="form-control" name="dari" placeholder="Rumah"/>
                    </div>
                    <div class="form-group">
                      <label>Ke:</label>
                      <select class="form-control" style="height: 100%" name="ke">
                        <option value="Surabaya">Surabaya</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bali">Bali</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pulang:</label>
                      <input type="date" class="form-control" name="pulang"/>
                    </div>
                    <div class="form-group">
                      <label>Pergi:</label>
                      <input type="date" class="form-control" name="pergi"/>
                    </div>
                    <div class="form-group">
                      <label>Maskapai:</label>
                      <select class="form-control" style="height: 100%" name="maskapai">
                        <option value="Banteng Airlines">Banteng Airlines</option>
                        <option value="Beringin Airlines">Beringin Airlines</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Room:</label>
                      <select class="form-control" style="height: 100%" name="room">
                        <option value="Depan">Depan</option>
                        <option value="Tengah">Tengah</option>
                        <option value="Belakang">Belakang</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Jumlah:</label>
                      <input type="text" class="form-control" name="jumlah"/>
                    </div>
                    <div class="form-group">
                      <label>Kelas:</label>
                      <select class="form-control" style="height: 100%" name="kelas">
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
                      <button type="submit"class="btn btn-block btn-primary btn-lg"style="width: 50%">
                        Tambah
                      </button>
                    </center>
                  </div>
                </div>
                      </form>

              </div>
              <?= $this->endSection() ?>
