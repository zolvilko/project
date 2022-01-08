
                <h3>List Buku Tamu</h3>
                <a href="index.php?p=input_tamu" class="btn btn-success">Tambah Data</a>
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Komentar</th>
                        <th>Aksi</th>
                    </tr>
                    <?php 
                    include 'Class_crud.php';
                    $crud = new Crud();
                    $tamu = $crud->readData('tamu',null,null);
                    $no = 1;
                    foreach($tamu as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['comment']."</td>";
                        echo "<td>
                        <a class='btn btn-info' href='index.php?p=edit_tamu&id=".$row['id']."'>Update</a>
                        <a class='btn btn-danger' href='index.php?p=hapus_tamu&id=".$row['id']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>