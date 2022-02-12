
    <h2>Daftar Supplier</h2>
<div class="row">
    <div class="col-6">
    <?php FlashMessage::Flash(); ?>
    </div>
</div>

<button type="button" class="btn btn-primary tombolTambahSpl" data-bs-toggle="modal" data-bs-target="#formSpl">
Tambah data
</button>
<div class="container">
<div class="row mt-3">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $no=1;
        foreach ($data['spl'] as $spl) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $spl['nama_supplier']; ?></td>
                <td><?= $spl['notelp']; ?></td>
                <td><?= $spl['email']; ?></td>
                <td><?= $spl['alamat']; ?></td>
                <td class="text-nowrap">
                    <a href="<?= BASEURL;?>/supplier/ubah/<?= $spl['id'] ?>" data-bs-toggle="modal" data-bs-target="#formSpl" class="btn btn-info modalUbahSpl" data-id="<?= $spl['id']?>"><span data-feather='edit'></span>Edit</a>
                    <a class="btn btn-warning" href="<?= BASEURL;?>/supplier/hapus/<?= $spl['id'] ?>" onclick="return confirm('Yakin akan menghapus data?')"><span data-feather='trash'></span>Hapus</a>
                </td>
            </tr>
        

    <?php $no++; endforeach;?>
    </tbody>
</table>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formSpl" tabindex="-1" aria-labelledby="formSplLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formSplLabel">Tambah data mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= BASEURL ?>/mahasiswa/tambah">
        <div class="row mb-3">
            <label for="nama_supplier" class="col-sm-2 col-form-label">Nama Supplier</label>
            <div class="col-sm-8">
            <input type="hidden" class="form-control" id="id" name="id">
            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier">
            </div>
        </div>
        <div class="row mb-3">
            <label for="notelp" class="col-sm-2 col-form-label">No Telp</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="notelp" name="notelp">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-8">
            <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputKomentar" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-8">
            <textarea class="form-control" name="alamat" rows="3" id="alamat"> </textarea>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>