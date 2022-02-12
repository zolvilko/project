
    <h2>Daftar Mahasiswa</h2>
<div class="row">
    <div class="col-6">
    <?php FlashMessage::Flash(); ?>
    </div>
</div>

<button type="button" class="btn btn-primary tombolTambah" data-bs-toggle="modal" data-bs-target="#formMhs">
Tambah data
</button>
<div class="container">
<div class="row mt-3">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tgl_lahir</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $no=1;
        foreach ($data['mhs'] as $mhs) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['name']; ?></td>
                <td><?= $mhs['email']; ?></td>
                <td><?= $mhs['born']; ?></td>
                <td>
                    <a href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs['id'] ?>" onclick="return confirm('Yakin akan menghapus data?')"><span data-feather='trash'></span>Hapus</a> | 
                    <a href="<?= BASEURL;?>/mahasiswa/ubah/<?= $mhs['id'] ?>" data-bs-toggle="modal" data-bs-target="#formMhs" class="modalUbah" data-id="<?= $mhs['id']?>"><span data-feather='edit'></span>Edit</a>
                </td>
            </tr>
        

    <?php $no++; endforeach;?>
    </tbody>
</table>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formMhs" tabindex="-1" aria-labelledby="formMhsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formMhsLabel">Tambah data mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= BASEURL ?>/mahasiswa/tambah">
        <div class="row mb-3">
            <label for="inputNama" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-8">
            <input type="hidden" class="form-control" id="id" name="id">
            <input type="text" class="form-control" id="nim" name="nim">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputNama" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-8">
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-8">
            <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputNama" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-8">
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="jekel_l" type="radio" name="jekel" value="L" checked>
                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="jekel_p" type="radio" name="jekel" value="P" >
                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
            </div>
            
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