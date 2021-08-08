<?= $this->extend('admin/layouts/admin_layouts_or') ?>

<?= $this->section('content') ?>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 5%"><center>No</center></th>
                      <th style="width: 30%">Nama</th>
                      <th style="width: 15%"><center>Tujuan</center></th>
                      <th><center>Pulang</center></th>
                      <th><center>Pergi</center></th>
                      <th><center>Jumlah</center></th>
                      <th style="width: 25%"><center>Actions</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;foreach ($orders as $a) : ?>
                    <tr>
                      <td><center><?= $no++ ?></center></td>
                      <td><?= $a['nama'] ?></td>
                      <td><?= $a['tujuan'] ?></td>
                      <td><center><?= $a['pulang'] ?></center></td>
                      <td><center><?= $a['pergi'] ?></center></td>
                      <td><center><?= $a['jumlah'] ?></center></td>
                      <td>
                        <center>
                          <a href="<?= site_url('admin/orders/'.$a['id'].'/edit') ?>"class="btn btn-sm bg-info">
                            <i class="fas fa-user-edit"></i> Edit
                          </a>
                          <a class="btn btn-sm bg-danger" href="#" data-href="<?= site_url('admin/orders/'.$a['id'].'/delete') ?>" onclick="confirmToDelete(this)">
                            <i class="fas fa-user-minus"></i> Delete
                          </a>
                        </center>
                      </td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th style="width: 5%"><center>No</center></th>
                      <th style="width: 30%">Nama</th>
                      <th><center>Tujuan</center></th>
                      <th><center>Pulang</center></th>
                      <th><center>Pergi</center></th>
                      <th><center>Jumlah</center></th>
                      <th style="width: 25%"><center>Actions</center></th>
                    </tr>
                  </tfoot>
                </table>
                <div class="col-md-2">
                 <a href="<?= site_url('admin/orders/new') ?>">
                 <button type="button" class="btn btn-success btn-block btn-flat"><i class="fa fa-user-plus"></i> Tambah Order</button>
                 </a>
                 </div>
              </div>
                     <div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Apakah anda yakin?</h2>
        <p>Data yang sudah di hapus tidak bisa di kembalikan</p>
      </div>
      <div class="modal-footer">
        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
function confirmToDelete(el){
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
}
</script>
              <?= $this->endSection() ?>