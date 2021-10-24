<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: gray;
		}
		h3{
			background-color: black;
			padding: 10px;
			margin-left: 550px;
			margin-top: 320px;
			width: 27%;
			text-align: center;
			font-family: serif;
			font-size: 25px;
			color: ghostwhite;
			border-top: 3px solid gainsboro;
			border-right: 3px solid gainsboro;
			border-color: darkblue;
			border-top-right-radius: 7px;
			border-top-left-radius: 7px;
		}
		form{
			margin-left: 550px;
			margin-top: -23px;
			padding: 10px;
			background-color: ghostwhite;
			font-family: serif;
			text-align: left;
			font-size: 23px;
			size: 100px;
			width: 27%;
			height: 110px;
			text-align: right;
			border-bottom: 3px solid gainsboro;
			border-right: 3px solid gainsboro;
			border-color: darkblue;
			border-bottom-right-radius: 7px;
			border-bottom-left-radius: 7px;
			text-shadow: 2px 3px 6px;
		}
		input{
			padding: 2px;
			margin: 2px;
			margin-left: 20px;
			text-align: left;
			width: 250px;
			border-right-left: 2px solid gainsboro;
			border-color: silver;
			border-radius: 5px;

		}
		.btn_btn-primary{
			width: 70px;
			font-family: serif;
			font-size: 17px;
			text-align: center;
			color: white;
			border-right-left: 2px solid gainsboro;
			border-color: silver;
			border-radius: 10px;
			margin-right: 20px;
			background-color: darkblue;
		}
	</style>
		
</head>
<body>
	<h3>Tambah Data Jurusan</h3>
	<form action="proses_tambah_kelas.php" method="post">
		Nama Jurusan : 
		<input type="text" name="nama_jurusan" value="" class="form-control"><br>
		Angkatan :
		<input type="text" name="angkatan" value="" class="form-control"><br>
		<input type="submit" name="simpan" value="simpan" class="btn_btn-primary">
	</form>
</body>
</html>