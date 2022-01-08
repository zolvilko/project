<?php 
    include 'Class_crud.php';
    $crud   = new Crud();
    if(isset($_GET['id'])){
        $id_value   = $_GET['id']; 
        $update     = $crud->readData('jenis','id',$id_value);
        foreach ($update as $rows) {
            $nama       = $rows['nama_jenis'];
            $keterangan   = $rows['keterangan'];
        }
    }else{
        $nama = ''; $keterangan = '';
    }
?>

<div class="col-sm-9">
    <h3>Ubah Data Jenis Barang</h3>
    <form method="post" action="">
        <div class="form-group row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama Jenis</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" value="<?=$nama ?>" required>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="keterangan" cols="5"><?=$keterangan ?></textarea>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-sm-2 col-form-label"></label>
            <!-- <input type="text" name="email" class="form-control" id="id_data" value="<?=$id_value ?>"> -->
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
    $arrData = array("nama_jenis='".$_POST['nama']."'","keterangan='".$_POST['keterangan']."'");
    $result = $crud->updateData('jenis',$arrData,'id',$id_value);
    if ($result=='Sukses') {
        echo "<script>window.location='index.php?p=list_jenis'</script>";
    } else{
        echo "Gagal , data tidak tersimpan ".$result;
        print_r($arrData);
    }
}
?>