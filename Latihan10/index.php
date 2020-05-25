<?php

include "controller/controller.php";


$main = new controller();

if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$main->viewEdit($id);
} else if (isset($_GET['hapus'])) {
	$id = $_GET['hapus'];
	$main->delete($id);
} else if (isset($_GET['tampil'])) {
	$main->view();
} else if (isset($_GET['cetak'])) {
	$id = $_GET['cetak'];
	$main->cetak($id);
} else if (isset($_GET['pdf'])) {
	$id = $_GET['pdf'];
	$main->pdf($id);
} else {
	$main->index();
}
