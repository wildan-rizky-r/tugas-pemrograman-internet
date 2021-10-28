<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: aliceblue;
		}
		h3{
			text-align: center;
			background-color: black;
			padding-bottom: 10px;
			padding-top: 10px;
			width: 1650px;
			font-family: serif;
			font-size: 25px;
			color: ghostwhite;
			border-top-right-radius: 7px;
			border-top-left-radius: 7px; 
		}
		table{
			margin-top: -24px;
			width: 1650px;
			height: 100%;
			border-bottom: 3px solid gainsboro;
			border-color: black;
			border-bottom-right-radius: 7px;
			border-bottom-left-radius: 7px;
			border-spacing: 0px; 
		}
		th{
			text-align: left;
			background-color: ghostwhite;
			font-family: monospace;
			font-size: 20px;
			padding: 7px;
			color: black;
			padding-left: 20px;
			border-bottom: 3px solid gainsboro;
			border-color: black;
		}
		tr{
			background-color: aliceblue;
			font-family: initial;
			font-size: 17px;
			height: 35px;
		}
		tr:nth-child(2n+0){
			background-color: ghostwhite;
		}
		td{
			padding-left: 20px;
		}

		table a{
			background-color: darkred;
			padding: 5px;
			border-radius: 5px;
			color: ghostwhite;
			text-decoration: none;
		}
		table a:hover{
			background-color: black;
			color: ghostwhite;
		}
	</style>
</head>
<body>
	<h3>Data Jurusan</h3>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>JURUSAN</th>
				<th>ANGKATAN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			include "koneksi.php";
			$qry_jurusan = mysqli_query($conn,"select * from jurusan");
			$no = 0;
			while ($data_jurusan = mysqli_fetch_array($qry_jurusan)) {
			$no++;?>
			<tr>
			<td><?=$no?></td><td><?=$data_jurusan['nama_jurusan']?></td> <td><?=$data_jurusan['angkatan']?></td>

			<td><a href="hapus.php?id_siswa=<?=$data_siswa['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini')" class="btn btn-danger">Hapus</a></td>
			</tr>
			<?php 
			}
			?>
			</tbody>
	</table>

</body>
</html>