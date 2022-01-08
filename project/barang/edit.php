<?php 
    include 'Class_crud.php';
    $crud   = new Crud();
    if(isset($_GET['id'])){
        $id_value   = $_GET['id']; 
        $update     = $crud->readData('barang','id',$id_value);
        foreach ($update as $rows) {
            $kd_brg     = $rows['kode_barang'];
            $nama       = $rows['nama_barang'];
            $satuan     = $rows['satuan'];
            $jenis      = $rows['id_jenis'];
            $supplier   = $rows['id_supplier'];
            $harga      = $rows['harga'];
            $stok       = $rows['stok'];
        }
    }else{
        $nama = ''; $email = ''; $komentar = '';
    }
?>

<div class="col-sm-9">
    <h3>Ubah Data Tamu</h3>
    <form method="post" action="">
        <div class="form-group row mb-3">
            <label for="kd_brg" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
                <input type="text" name="kd_brg" class="form-control " id="kd_brg" value="<?=$kd_brg ?>" required>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" value="<?=$nama ?>" required>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="jenis" class="col-sm-2 col-form-label"> Nama Jenis</label>
            <div class="col-sm-10">
                <select name="jenis" class="form-control" id="jenis">
                    <?php
                    $jenis = $crud->readData('jenis',null,null); 
                    foreach($jenis as $row)
                    {
                        if ($row['id']==$jenis) {
                            $selec = 'selected';
                        } else {
                            $selec = '';
                        }

                        echo "<option value=".$row['id']." ".$selec.">".$row['nama_jenis']."</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
                <input type="text" name="stok" class="form-control" id="stok" value="<?=$stok ?>">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
            <div class="col-sm-10">
                <input type="text" name="satuan" class="form-control" id="satuan" value="<?=$satuan ?>">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" name="harga" class="form-control" id="harga" value="<?=$harga ?>">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="supplier" class="col-sm-2 col-form-label"> Nama Supplier</label>
            <div class="col-sm-10">
                <select name="supplier" class="form-control" id="supplier">
                    <?php
                    $supplier = $crud->readData('supplier',null,null); 
                    foreach($supplier as $row)
                    {
                        if ($row['id']==$supplier) {
                            $selec = 'selected';
                        } else {
                            $selec = '';
                        }

                        echo "<option value=".$row['id']." ".$selec.">".$row['nama_supplier']."</option>";
                    }
                    ?>
                </select>
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
    $arrData = array("kode_barang='".$_POST['kd_brg']."'","nama_barang='".$_POST['nama']."'","id_jenis='".$_POST['jenis']."'","stok='".$_POST['stok']."'","satuan='".$_POST['satuan']."'","harga='".$_POST['harga']."'","id_supplier='".$_POST['supplier']."'");
    $result = $crud->updateData('barang',$arrData,'id',$id_value);
    if ($result=='Sukses') {
        echo "<script>window.location='index.php?p=list_brg'</script>";
    } else{
        echo "Gagal , data tidak tersimpan ".$result;
        print_r($arrData);
    }
}
?>