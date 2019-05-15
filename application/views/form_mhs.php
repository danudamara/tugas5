<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Data Mahasiswa</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1><?=$tipe?> Mahasiswa</h1>
		<form method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2">
					Nama
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama" value="<?=isset($default['nama'])? $default['nama'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					NIM					
				</label>
				<div class="col-sm-10">
					<textarea name="nim" class="form-control"><?=isset($default['nim'])? $default['nim'] : ""?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					jurusan					
				</label>
				<div class="col-sm-10">
					<input type="jurusan" class="form-control" name="jurusan" value="<?=isset($default['jurusan'])? $default['jurusan'] : ""?>">
				</div>
			</div>
			<center>
				<button name="tombol_submit" class="btn btn-primary">
					Simpan
				</button>
			</center>


		</form>
	</div>
</body>
</html>