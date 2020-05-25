<?php
//include class model
include "model/model.php";

class controller
{

	public $model;


	function __construct()
	{
		$this->model = new model();
	}
	function index()
	{
		include "view/view_utama.php";
	}

	function view()
	{
		$data = $this->model->tampilData();
		include "view/view_semua.php";
	}

	function viewEdit($id)
	{
		$data = $this->model->pilihData($id);
		$row = $this->model->fetch($data);
		include "view/view_edit.php";
	}

	function viewInsert()
	{
		include "view/view_add.php"; //menampilkan halaman add data
	}

	//fungsi updata data
	function update()
	{
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$file_name = $_FILES['file']['name'];
		$tmp_name = $_FILES['file']['tmp_name'];
		move_uploaded_file($tmp_name, "assets/logo/" . $file_name);
		$update = $this->model->updateData($nama, $alamat, $file_name, $id);
		header("location:index.php?tampil");
	}

	function delete($id)
	{
		$delete = $this->model->deleteData($id);
		header("location:index.php?tampil");
	}

	function insert()
	{
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$file_name = $_FILES['file']['name'];
		$tmp_name = $_FILES['file']['tmp_name'];
		move_uploaded_file($tmp_name, "assets/logo/" . $file_name);


		$insert = $this->model->tambahData($nama, $alamat, $file_name);
		header("location:index.php?tampil");
	}

	function cetak($id)
	{
		$cetak = $this->model->cetakData($id);
		include "view/cetak.php";
	}
	function pdf($id)
	{
		$pdf = $this->model->cetakData($id);
		include "view/pdf.php";
	}

	function __destruct()
	{
	}
}
