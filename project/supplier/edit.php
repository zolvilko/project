<?php 
    include 'Class_crud.php';
    $crud   = new Crud();
    if(isset($_GET['id'])){
        $id_value   = $_GET['id']; 
        $update     = $crud->readData('supplier','id',$id_value);
        foreach ($update as $rows) {
            $nama       = $rows['nama_supplier'];
            $telp      = $rows['notelp'];
            $email      = $rows['email'];
            $alamat   = $rows['alamat'];
        }
    }else{
        $nama = ''; $telp = ''; $email = ''; $alamat = '';
    }
?>

<div class="col-sm-9">
    <h3>Ubah Data Supplier</h3>
    <form method="post" action="">
        <div class="form-group row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" value="<?=$nama ?>" required>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="telp" class="col-sm-2 col-form-label">NO Telp</label>
            <div class="col-sm-10">
                <input type="text" name="telp" class="form-control" id="telp" value="<?=$telp ?>">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" name="email" class="form-control" id="email" value="<?=$email ?>">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="alamat" cols="5"><?=$alamat ?></textarea>
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
    $id_value   = $_GET['id'];
    $arrData = array("nama_supplier='".$_POST['nama']."'","notelp='".$_POST['telp']."'","email='".$_POST['email']."'","alamat='".$_POST['alamat']."'");
    $result = $crud->updateData('supplier',$arrData,'id',$id_value);
    if ($result=='Sukses') {
        echo "<script>window.location='index.php?p=list_supplier'</script>";
    } else{
        echo "Gagal , data tidak tersimpan ".$result;
        print_r($arrData);
    }
}
?>