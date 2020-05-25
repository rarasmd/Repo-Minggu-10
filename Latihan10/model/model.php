<?php
class model
{
	//inisialisasi awal untuk class biasa disebut instansiasi
	public $host = 'localhost';
	public $name = 'root';
	public $pass = '';
	public $dbname = 'crud_pdo';

	public $mysqli;

	function __construct()
	{

		$this->mysqli = new mysqli($this->host, $this->name, $this->pass, $this->dbname);
	}

	function execute($query)
	{
		return mysqli_query($this->mysqli, $query);
	}

	function tampilData()
	{
		$query = "select * from sekolah";
		return $this->execute($query);
	}

	function pilihData($id)
	{
		$query = "select * from sekolah where id='$id'";
		return $this->execute($query);
	}

	function updateData($nama, $alamat, $logo, $nim)
	{
		$query = "update sekolah set nama='$nama', alamat='$alamat', logo='$logo' where id = '$nim'";
		return $this->execute($query);
	}

	function deleteData($id)
	{
		$query = "delete from sekolah where id='$id'";
		return $this->execute($query);
	}

	function tambahData($nama, $alamat, $logo)
	{
		$query = "insert into sekolah values ('', '$nama', '$alamat', '$logo')";
		return $this->execute($query);
	}

	function cetakData($id)
	{
		$query = "select * from sekolah where id='$id'";
		return $this->execute($query);
	}

	function fetch($var)
	{
		return mysqli_fetch_array($var);
	}

	//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
	function __destruct()
	{
	}
}
