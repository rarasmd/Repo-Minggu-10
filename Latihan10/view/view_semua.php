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
			<h3>Data Sekolah</h3>
			<table id="example" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>NO</th>
						<th>NAMA</th>
						<th>ALAMAT</th>
						<th>FOTO</th>
						<th>AKSI</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php while ($tampils = $this->model->fetch($data)) { ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $tampils[1] ?></td>
							<td><?php echo $tampils[2] ?></td>
							<td>
								<img src="assets/logo/<?php echo $tampils[3]; ?>" class="img-circle" width="100"></td>
							<td>
								<a href="index.php?pdf=<?php echo $tampils[0]; ?>" target="_blank" class="btn btn-info"> PDF </a>
								<a href="index.php?cetak=<?php echo $tampils[0]; ?>" class="btn btn-success"> Download </a>
								<a href="index.php?edit=<?php echo $tampils[0]; ?>" class="btn btn-info"> EDIT </a>
								<a href="index.php?hapus=<?php echo $tampils[0]; ?>" class="btn btn-success"> HAPUS </a>

							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>
<script src="assets/jquery-3.4.1.slim.min.js"></script>
<script src="assets/bootstrap.min.js"></script>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>