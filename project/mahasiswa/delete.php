<?php
	include 'Class_crud.php';
	$crud = new Crud();
	if(isset($_GET['id'])){
        $id_value   = $_GET['id']; 
        $result     = $crud->deleteData('mahasiswa','id',$id_value);
        if ($result=='Sukses') {
        	echo "<script>window.location='index.php?p=list_mhs'</script>";
        }
    }