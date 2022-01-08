<?php 
/**
 * 
 */
class Koneksi
{
	private $host = 'localhost';
    private $db = 'project';
    private $user = 'root';
    private $pass = '';
    protected $conn;
	function __construct()
	{
		if (!isset($this->conn)) {
        	$this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
        }
        if (!$this->conn) {
        	echo ('koneksi gagal sd');
        	die();
        }
        return $this->conn;
	}
}
