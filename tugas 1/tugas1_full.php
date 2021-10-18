<?php 
	// Variabel
	$nama = "Wildan Rizky Ramadlan";
	$umur = 20;
	$identitas_lain = "Jenis Kelamin Saya Laki Laki, Alamat Saya di Lamongan, Saya Berkuliah di Universitas Gajayana mengambil Prodi Sistem Informasi";

	echo "<b>Variabel</b><br>";
	echo "Halo, Perkenalkan Nama Saya $nama, Umur Saya $umur Tahun <br> $identitas_lain";

	echo "<br><br><br>";


	//Function
	function identitas(){
		echo "Nama Saya Wildan Rizky Ramadlan<br>";
		echo "Umur Saya 20<br>";
		echo "Alamat Saya di Lamongan<br>";
		echo "Kuliah di Universitas Gajayana<br>";
		echo "Prodi Sistem Informasi";
	}

	echo "<b>Function</b><br>";
	identitas();

	echo "<br><br><br>";


	//Kondisi if else
	echo "<b>Kondisi if-else</b><br>";
	$saya = "Wildan";
	if ($saya == "Wildan") {
		echo "Itu Adalah Nama Saya";
	}
	else{
		echo "Itu Bukan Nama Saya";
	}
?>
