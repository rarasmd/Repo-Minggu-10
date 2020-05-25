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
			<br>

			<form action="" method="post" enctype="multipart/form-data">

				<div class="col-md-6">

					<div class="form-group">
						<label for="nama">Nama </label>
						<input type="hidden" name="id" value="<?= $row[0] ?>">
						<input type=" text" class="form-control" id="nama" name="nama" value="<?= $row[1] ?>" required>

					</div>
					<div class=" form-group">
						<label for="alamat">Alamat</label>
						<input type="text" class="form-control" id="alamat" name="alamat" value="<?= $row[2] ?>" required>
					</div>
					<div class=" form-group">
						<label for="logo">Logo</label>
						<img src="assets/logo/<?= $row[3]; ?>" class="img-thumbnail" style="width:30%;">
						<input type="file" class="form-control" name="file" id="logo" value="<?= $row[3] ?>">
					</div>
					<td><input type="submit" name="submit" class="btn btn-success" value="Simpan"></td>
				</div>

			</form>
		</div>
	</div>
</body>

</html>
<?php
if (isset($_POST['submit'])) { //jika button submit diklik maka panggil fungsi update pada controller
	$main = new controller();
	$main->update();
}
?>