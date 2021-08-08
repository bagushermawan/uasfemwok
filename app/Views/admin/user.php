<?= $this->extend('admin/layouts/admin_layouts_us') ?>

<?= $this->section('content') ?>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 5%"><center>No</center></th>
                      <th style="width: 30%">Nama</th>
                      <th><center>Username</center></th>
                      <th style="width: 15%"><center>Role</center></th>
                      <th style="width: 25%"><center>Actions</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;foreach ($users as $a) : ?>
                    <tr>
                      <td><center><?= $no++ ?></center></td>
                      <td><?= $a['nama'] ?></td>
                      <td><?= $a['username'] ?></td>
                      <? ?>
                      <td><center><?= $b=$a['role']; ?></center></td>
                      <td>
                        <center>
                          <a href="<?= site_url('admin/users/'.$a['id'].'/edit') ?>"class="btn btn-sm bg-info">
                            <i class="fas fa-user-edit"></i> Edit
                          </a>
                          <a class="btn btn-sm bg-danger" href="#" data-href="<?= site_url('admin/users/'.$a['id'].'/delete') ?>" onclick="confirmToDelete(this)">
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
                      <th><center>Username</center></th>
                      <th style="width: 15%"><center>Role</center></th>
                      <th style="width: 25%"><center>Actions</center></th>
                    </tr>
                  </tfoot>
                </table>
                <div class="col-md-2">
                 <a href="<?= site_url('admin/users/new') ?>">
                 <button type="button" class="btn btn-success btn-block btn-flat"><i class="fa fa-user-plus"></i> Tambah User</button>
                 </a>
                 </div>
              </div>
                     <div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Are you sure?</h2>
        <p>The data will be deleted and lost forever</p>
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