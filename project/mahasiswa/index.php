
                <h3>List Mahasiswa</h3>
                <a href="index.php?p=input_mhs" class="btn btn-success">Tambah Data</a>
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                    <?php 
                    include 'Class_crud.php';
                    $crud = new Crud();
                    $data = $crud->readData('mahasiswa',null,null);
                    $no = 1;
                    foreach($data as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nim']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['born']."</td>";
                        echo "<td>".$row['email']."</td>";
                        if ($row['gender']=='1') {
                            echo "<td>Laki - Laki</td>";
                        } elseif ($row['gender']=='2') {
                            echo "<td>Perempuan</td>";
                        } else {
                            echo "<td></td>";
                        }
                        echo "<td>".$row['address']."</td>";
                        echo "<td>
                        <a class='btn btn-info' href='index.php?p=edit_mhs&id=".$row['id']."'>Update</a>
                        <a class='btn btn-danger' href='index.php?p=hapus_mhs&id=".$row['id']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>