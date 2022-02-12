<?php
class Mahasiswa extends Controller {
    public function index()
    {
        $data['judul']='Daftar Mahasiswa';
        $data['mhs']=$this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('mahasiswa/index',$data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->tambahMahasiswa($_POST)>0) {
            FlashMessage::setflash('Berhasil','disimpan','primary');
            header('location:'.BASEURL. '/mahasiswa');
            exit;
        }
        else {
            FlashMessage::setflash('Gagal','disimpan','danger');
            header('location:'.BASEURL. '/mahasiswa');
            exit;
        }
        
    }
    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->hapusMahasiswa($id)>0) {
            FlashMessage::setflash('Berhasil','dihapus','success');
            header('location:'.BASEURL. '/mahasiswa');
            exit;
        }
        else {
            FlashMessage::setflash('Gagal','dihapus','danger');
            header('location:'.BASEURL. '/mahasiswa');
            exit;
        }
        
    }
    public function getUbah()
    {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
       
    }
    public function Ubah()
    {
        {
            if ($this->model('Mahasiswa_model')->ubahMahasiswa($_POST)>0) {
                FlashMessage::setflash('Berhasil','diubah','primary');
                header('location:'.BASEURL. '/mahasiswa');
                exit;
            }
            else {
                FlashMessage::setflash('Gagal','diubah','danger');
                header('location:'.BASEURL. '/mahasiswa');
                exit;
            }
            
        }       
    }
}