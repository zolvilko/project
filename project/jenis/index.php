
                <h3>List Jenis Barang</h3>
                <a href="index.php?p=input_jenis" class="btn btn-success">Tambah Data</a>
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                    <?php 
                    include 'Class_crud.php';
                    $crud = new Crud();
                    $data = $crud->readData('jenis',null,null);
                    $no = 1;
                    foreach($data as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nama_jenis']."</td>";
                        echo "<td>".$row['keterangan']."</td>";
                        echo "<td>
                        <a class='btn btn-info' href='index.php?p=edit_jenis&id=".$row['id']."'>Update</a>
                        <a class='btn btn-danger' href='index.php?p=hapus_jenis&id=".$row['id']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>