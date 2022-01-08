
                <h3>List Supplier</h3>
                <a href="index.php?p=input_supplier" class="btn btn-success">Tambah Data</a>
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Telp</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                    <?php 
                    include 'Class_crud.php';
                    $crud = new Crud();
                    $supplier = $crud->readData('supplier',null,null);
                    $no = 1;
                    foreach($supplier as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nama_supplier']."</td>";
                        echo "<td>".$row['notelp']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['alamat']."</td>";
                        echo "<td>
                        <a class='btn btn-info' href='index.php?p=edit_supplier&id=".$row['id']."'>Update</a>
                        <a class='btn btn-danger' href='index.php?p=hapus_supplier&id=".$row['id']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>