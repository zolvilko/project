<?php 
include 'Class_crud.php';
$crud = new Crud();
?>
<div class="col-sm-9">
    <h3>Tambah Data Barang</h3>
    <form method="post" action="">
        <div class="form-group row mb-3">
            <label for="kd_brg" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
                <input type="text" name="kd_brg" class="form-control " id="kd_brg" required>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" required>
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
                        echo "<option value=".$row['id'].">".$row['nama_jenis']."</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
                <input type="text" name="stok" class="form-control" id="stok">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
            <div class="col-sm-10">
                <input type="text" name="satuan" class="form-control" id="satuan">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" name="harga" class="form-control" id="harga">
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
                        echo "<option value=".$row['id'].">".$row['nama_supplier']."</option>";
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
    $arrData = array('kode_barang' => $_POST['kd_brg'],'nama_barang' => $_POST['nama'],'id_jenis' => $_POST['jenis'],'stok' => $_POST['stok'],'satuan' => $_POST['satuan'],'harga' => $_POST['harga'], 'id_supplier' => $_POST['supplier']);
    $hasil = $crud->createData('barang',$arrData);
    if ($hasil=='Sukses') {
        echo "<script>window.location='index.php?p=list_brg'</script>";
    } else{
        echo "Gagal , data tidak tersimpan";
    }
}
?>