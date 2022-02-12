
    <h2>Daftar Barang</h2>
<div class="row">
    <div class="col-6">
    <?php FlashMessage::Flash(); ?>
    </div>
</div>

<button type="button" class="btn btn-primary tombolTambahBrg" data-bs-toggle="modal" data-bs-target="#formBrg">
Tambah data
</button>
<div class="container">
<div class="row mt-3">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Satuan</th>
            <th>Supplier</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $no=1;
        foreach ($data['brg'] as $brg) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $brg['kode_barang']; ?></td>
                <td><?= $brg['nama_barang']; ?></td>
                <td><?= $brg['nama_jenis']; ?></td>
                <td><?= $brg['stok']; ?></td>
                <td><?= $brg['harga']; ?></td>
                <td><?= $brg['satuan']; ?></td>
                <td><?= $brg['nama_supplier']; ?></td>
                <td>
                    <a href="<?= BASEURL;?>/barang/ubah/<?= $brg['id'] ?>" data-bs-toggle="modal" data-bs-target="#formBrg" class="btn btn-info modalUbahBrg" data-id="<?= $brg['id']?>"><span data-feather='edit'></span>Edit</a>
                    <a class="btn btn-warning" href="<?= BASEURL;?>/barang/hapus/<?= $brg['id'] ?>" onclick="return confirm('Yakin akan menghapus data?')"><span data-feather='trash'></span>Hapus</a>           
                </td>
            </tr>
        

    <?php $no++; endforeach;?>
    </tbody>
</table>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formBrg" tabindex="-1" aria-labelledby="formBrgLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formBrgLabel">Tambah data barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= BASEURL ?>/barang/tambah">
        <div class="row mb-3">
            <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-8">
            <input type="hidden" class="form-control" id="id" name="id">
            <input type="text" class="form-control" id="kode_barang" name="kode_barang">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
            </div>
        </div>
        <div class="row mb-3">
            <label for="id_jenis" class="col-sm-2 col-form-label">Jenis Barang</label>
            <div class="col-sm-8">
                <select name="id_jenis" class="form-control" id="id_jenis">
                    <?php
                    echo "<option value=''>- Pilih Jenis Barang -</option>";
                    foreach($data['jns'] as $jns)
                    { 
                        echo "<option value=".$jns['id'].">".$jns['nama_jenis']."</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="stok" name="stok">
            </div>
        </div>
        <div class="row mb-3">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="harga" name="harga">
            </div>
        </div>
        <div class="row mb-3">
            <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="satuan" name="satuan">
            </div>
        </div>
        <div class="row mb-3">
            <label for="id_supplier" class="col-sm-2 col-form-label">Nama Supplier</label>
            <div class="col-sm-8">
                <select name="id_supplier" class="form-control" id="id_supplier">
                    <?php
                    echo "<option value=''>- Pilih Supplier Barang -</option>";
                    foreach($data['spl'] as $spl)
                    { 
                        echo "<option value=".$spl['id'].">".$spl['nama_supplier']."</option>";
                    }
                    ?>
                </select>
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