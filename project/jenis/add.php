<div class="col-sm-9">
    <h3>Tambah Data Jenis Barang</h3>
    <form method="post" action="">
        <div class="form-group row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama Jenis</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" required>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="keterangan" cols="5"></textarea>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                <button type="reset" class="btn btn-danger" name="reset" onclick="history.back()">Batal</button>
            </div>
        </div>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    include 'Class_crud.php';
    $crud = new Crud();
    $arrData = array('nama_jenis' => $_POST['nama'],'keterangan' => $_POST['keterangan']);
    $hasil = $crud->createData('jenis',$arrData);
    if ($hasil=='Sukses') {
        echo "<script>window.location='index.php?p=list_jenis'</script>";
    } else{
        echo "Gagal , data tidak tersimpan";
    }
}
?>