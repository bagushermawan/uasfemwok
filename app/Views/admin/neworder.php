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
                      <label>Nama:</label>
                      <input type="text" class="form-control" name="nama" placeholder="Markus Jon"/>
                    </div>
                    <div class="form-group">
                      <label>Tujuan:</label>
                      <select class="form-control select2" style="height: 100%" name="tujuan">
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
                      <input type="date" class="form-control" name="pulang"/>
                    </div>
                    <div class="form-group">
                      <label>Pergi:</label>
                      <input type="date" class="form-control" name="pergi"/>
                    </div>
                    <div class="form-group">
                      <label>Jumlah:</label>
                      <input type="text" class="form-control" name="jumlah"/>
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
