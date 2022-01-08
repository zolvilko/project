<?php 
include 'class_koneksi.php';

class Crud extends Koneksi{
	function __construct(){
		parent::__construct();
	}

	public function readData($table,$idtable,$id_value)
	{
		$q 		= "SELECT * FROM $table";
		if ($idtable != null) {
			$q.=" WHERE $idtable='".$id_value."'";
		}
		$result = $this->conn->query($q);
		if (!$result) {
			echo "Gagal menampilkan data";
		}
		$rows 	= array();

		while($row=$result->fetch_assoc()){
			$rows[]=$row;
		}
		return $rows;
	}

	public function createData($table,$data)
	{
		$fields = implode(', ', array_keys($data));
		$escaped_values = array_map(mysqli_real_escape_string(),array_values($data));
		foreach ($escaped_values as $idx => $data) $escaped_values[$idx]="'".$data."'";

		$values = implode(', ', $escaped_values);
		$q = "INSERT INTO $table ($fields) VALUES ($values)";
		$hasil = $this->conn->query($q);
		if ($hasil) {
			return "Sukses";
		} else {
			return "Gagal";
		}
	}

	public function updateData($table,$data,$id,$id_value)
	{
		$q="UPDATE $table SET ";
		$q.=implode(', ',$data);
		$q.=" WHERE $id='".$id_value."'";
		$result = $this->conn->query($q);
		if ($result) {
			return "Sukses";
		} else {
			return "Gagal";
		}
	}

	public function deleteData($table,$id,$id_value)
	{
		$q = "DELETE  From $table WHERE $id='".$id_value."'";
		$result = $this->conn->query($q);
		if ($result) {
			return "Sukses";
		} else {
			return "Gagal";
		}
	}
}

 ?>