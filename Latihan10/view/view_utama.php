<html>
<title>
	Latihan 10_02726
</title>

<head>
	<link rel="stylesheet" href="assets/bootstrap.min.css">

</head>

<body>
	<div class="container-sm">


		<div class="blockquote">
			<br>

			<nav class="navbar navbar-expand-lg navbar-light bg-info">
                <a class="navbar-brand" href="index.php">CRUD - PDO 02726</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="btn btn-success" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<ul>
						<li class="nav-item">
							<a class="btn btn-success" href="index.php?tampil">Sekolah</a>
						</li>

					</ul>
					</ul>

				</div>
			</nav>
			<br>
			<center>
			<h2>Welcome To The Jungle</h2>

			<form action="" method="post" enctype="multipart/form-data">

			<div class="col-md-10">
				<br>

				<div class="form-group">
					<label for="nama">Nama </label>
					<input type="text" class="form-control" id="nama" name="nama" required>

				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" class="form-control" id="alamat" name="alamat" required>
				</div>
				<div class="form-group">
					<label for="logo">Logo</label>
					<input type="file" class="form-control" name="file" id="logo" required>
				</div>

				<br>
				<button type="submit" name="submit" class="btn btn-success">Simpan</button>
			</form>

</body>
</div>
</div>


</html>
<script src="assets/jquery-3.4.1.slim.min.js"></script>
<script src="assets/bootstrap.min.js"></script>
<?php
if (isset($_POST['submit'])) { //jika button submit diklik maka panggil fungsi insert pada controller
	$main = new controller();
	$main->insert();
}
?>