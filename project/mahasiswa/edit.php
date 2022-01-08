<?php 
    include 'Class_crud.php';
    $crud   = new Crud();
    if(isset($_GET['id'])){
        $id_value   = $_GET['id']; 
        $update     = $crud->readData('mahasiswa','id',$id_value);
        foreach ($update as $rows) {
            $nim        = $rows['nim'];
            $name       = $rows['name'];
            $born       = $rows['born'];
            $email      = $rows['email']; 
            $gender     = $rows['gender'];
            $alamat     = $rows['address'];
        }
    }else{
        $nim = ''; $name = ''; $born = ''; $email = ''; $gender = ''; $alamat = '';
    }
?>

<div class="col-sm-9">
    <h3>Ubah Data Mahasiswa</h3>
    <form method="post" action="">
        <div class="form-group row mb-3">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" name="nim" class="form-control" id="nim" value="<?=$nim ?>" required>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" value="<?=$name ?>" required>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?=$born ?>">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" name="email" class="form-control" id="email" value="<?=$email ?>">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <select name="jk" class="form-control" id="jk">
                    <?php if ($gender=='1') {
                        $lk = 'selected';
                        $pr = '';

                    } elseif ($gender=='2')  {
                        $lk = '';
                        $pr = 'selected';
                    }
                     ?>
                    <option value="1" <?=$lk ?>>Laki - laki</option>
                    <option value="2" <?=$pr ?>>Perempuan</option>
                </select>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="alamat" id="alamat" cols="5"><?= $alamat ?></textarea>
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
    $arrData = array("nim='".$_POST['nim']."'","name='".$_POST['nama']."'","born='".$_POST['tgl_lahir']."'","email='".$_POST['email']."'","gender='".$_POST['jk']."'","address='".$_POST['alamat']."'");
    $result = $crud->updateData('mahasiswa',$arrData,'id',$id_value);
    if ($result=='Sukses') {
        echo "<script>window.location='index.php?p=list_mhs'</script>";
    } else{
        echo "Gagal , data tidak tersimpan ".$result;
        print_r($arrData);
    }
}
?>