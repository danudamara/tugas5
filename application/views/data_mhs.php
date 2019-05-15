<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Data Mahasiswa</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<h1>Data Mahasiswa</h1>

	<a href="data/add" class="btn btn-primary">Tambah Data Mahasiswa</a>

	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama Mahasiswa</th>
				<th>Nim</th>
				<th>Jurusan</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<!-- ISI DATA AKAN MUNCUL DISINI -->
			<?php
			$no = 1; //untuk menampilkan no
			foreach($list_mhs as $row){
				echo "
				<tr>
					<td>$no</td>
					<td>$row[nama]</td>
					<td>$row[nim]</td>
					<td>$row[jurusan]</td>
					<td>
						<a href='data/edit/$row[id]' class='btn btn-sm btn-info'>Update</a>
						<a href='data/delete/$row[id]' class='btn btn-sm btn-danger'>Hapus</a>
					</td>
				</tr>
				";
				$no++;
			}
			?>
		</tbody>
	</table>
</div>
	
</body>
</html>
