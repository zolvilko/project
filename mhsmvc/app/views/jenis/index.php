
    <h2>Daftar Jenis</h2>
<div class="row">
    <div class="col-6">
    <?php FlashMessage::Flash(); ?>
    </div>
</div>

<button type="button" class="btn btn-primary tombolTambahJns" data-bs-toggle="modal" data-bs-target="#formJns">
Tambah data
</button>
<div class="container">
<div class="row mt-3">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $no=1;
        foreach ($data['jns'] as $jns) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $jns['nama_jenis']; ?></td>
                <td><?= $jns['keterangan']; ?></td>
                <td class="text-nowrap">
                    <a href="<?= BASEURL;?>/jenis/ubah/<?= $jns['id'] ?>" data-bs-toggle="modal" data-bs-target="#formJns" class="btn btn-info modalUbahJns" data-id="<?= $jns['id']?>"><span data-feather='edit'></span>Edit</a>
                    <a class="btn btn-warning" href="<?= BASEURL;?>/jenis/hapus/<?= $jns['id'] ?>" onclick="return confirm('Yakin akan menghapus data?')"><span data-feather='trash'></span>Hapus</a>
                </td>
            </tr>
        

    <?php $no++; endforeach;?>
    </tbody>
</table>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formJns" tabindex="-1" aria-labelledby="formJnsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formJnsLabel">Tambah data jenis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= BASEURL ?>/jenis/tambah">
        <div class="row mb-3">
            <label for="nama_jenis" class="col-sm-2 col-form-label">Nama Jenis</label>
            <div class="col-sm-8">
            <input type="hidden" class="form-control" id="id" name="id">
            <input type="text" class="form-control" id="nama_jenis" name="nama_jenis">
            </div>
        </div>
        <div class="row mb-3">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-8">
            <textarea class="form-control" name="keterangan" rows="3" id="keterangan"> </textarea>
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