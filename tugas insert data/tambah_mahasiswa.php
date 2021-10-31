<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<h3 class="tdm">Tambah Data Mahasiswa</h3>
	<form action="proses_tambah_mahasiswa.php" method="post" class="frm_tdm">
		Nama Mahasiswa : 
		<input type="text" name="nama_mahasiswa" value="" class="form-control"><br>
		Tanggal Lahir :
		<input type="text" name="tanggal_lahir" value="" class="form-control"><br>
		Jenis Kelamin :
		<input type="text" name="jenis_kelamin" value="" class="form-control"><br>
		Alamat :
		<input type="text" name="alamat" value="" class="form-control"><br>
		Username :
		<input type="text" name="username" value="" class="form-control"><br>
		Password :
		<input type="password" name="password" value="" class="form-control"><br>
		<input type="submit" name="simpan" value="simpan" class="btn_btn-primary">
	</form>
</body>
</html>