
                <h3>List Barang</h3>
                <a href="index.php?p=input_brg" class="btn btn-success">Tambah Data</a>
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Stok</th>
                        <th>Satuan</th>
                        <th>Harga</th>
                        <th>Supplier</th>
                        <th>Aksi</th>
                    </tr>
                    <?php 
                    include 'Class_crud.php';
                    $crud = new Crud();
                    $data = $crud->readData('barang',null,null);
                    $no = 1;
                    foreach($data as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['kode_barang']."</td>";
                        echo "<td>".$row['nama_barang']."</td>";

                        $jenis = $crud->readData('jenis','id',$row['id_jenis']);
                        if ($jenis) {
                            foreach($jenis as $row2)
                            {
                                echo "<td>".$row2['nama_jenis']."</td>";
                            }
                        }else echo "<td></td>";
                        
                        echo "<td>".$row['stok']."</td>";
                        echo "<td>".$row['satuan']."</td>";
                        echo "<td>".$row['harga']."</td>";

                        $supplier = $crud->readData('supplier','id',$row['id_supplier']);
                        if ($supplier) {
                            foreach($supplier as $row2)
                            {
                                echo "<td>".$row2['nama_supplier']."</td>";
                            }
                        }else echo "<td></td>";
                        echo "<td>
                        <a class='btn btn-info' href='index.php?p=edit_brg&id=".$row['id']."'>Update</a>
                        <a class='btn btn-danger' href='index.php?p=hapus_brg&id=".$row['id']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>