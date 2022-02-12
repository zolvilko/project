<?php
class Mahasiswa_model {
    private $table='mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db= new Database;
    }
    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->resultId();
    }

    public function tambahMahasiswa($data)
    {
        $query="INSERT INTO mahasiswa VALUES('',:nim,:name,:born,:email,:gender,:address,'')";
        $this->db->query($query);
        $this->db->bind('nim',$data['nim']);
        $this->db->bind('name',$data['nama']);
        $this->db->bind('born',$data['tgl_lahir']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('gender',$data['jekel']);
        $this->db->bind('address',$data['alamat']);
        $this->db->execute();
        
        return $this->db->rowCount(); 
    }

    public function hapusMahasiswa($id)
    {
        $query="DELETE FROM mahasiswa WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahMahasiswa($data)
    {
        $query="UPDATE mahasiswa SET
                    nim = :nim,
                    name = :name,
                    born= :born,
                    email = :email,
                    gender = :gender,
                    address = :address
                    WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nim',$data['nim']);
        $this->db->bind('name',$data['nama']);
        $this->db->bind('born',$data['tgl_lahir']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('gender',$data['jekel']);
        $this->db->bind('address',$data['alamat']);
        $this->db->bind('id',$data['id']);
        $this->db->execute();
        
        return $this->db->rowCount(); 
    }
}