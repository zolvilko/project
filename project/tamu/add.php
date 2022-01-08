<div class="col-sm-9">
    <h3>Tambah Data Tamu</h3>
    <form method="post" action="">
        <div class="form-group row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" required>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" name="email" class="form-control" id="email">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="komentar" class="col-sm-2 col-form-label">komentar</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="komentar" cols="5"></textarea>
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
    $arrData = array('name' => $_POST['nama'],'email' => $_POST['email'], 'comment' => $_POST['komentar']);
    $hasil = $crud->createData('tamu',$arrData);
    if ($hasil=='Sukses') {
        echo "<script>window.location='index.php?p=list_tamu'</script>";
    } else{
        echo "Gagal , data tidak tersimpan";
    }
}
?>