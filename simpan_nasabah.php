<?php
    $norek = $_POST['norek'];
    $nama  = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggalLahir = $_POST['tanggalLahir'];
	
	include "koneksi.php";
	
	//validasi redundant data atau data yang sama
	
	$cek = mysqli_query($koneksi, "select * from nasabah where norek ='$norek'");
	$jumlah = mysqli_num_rows($cek);
	//echo $jumlah;
	
	if($jumlah == 1)
	{
		echo "
		 <script>
		  alert('Data sudah ada');
		  window.location = 'form_nasabah.php?a=$norek&b=$nama&c=$alamat&d=$tanggalLahir';
		 </script>
		";
	}
	else
	{
		$simpan = mysqli_query($koneksi,"insert into nasabah set norek='$norek', nama='$nama', alamat='$alamat', tanggalLahir='$tanggalLahir'");
		
		if($simpan)
		{
			echo "
			<script>
			  alert('Data berhasil ditambahkan');
			  window.location = 'form_nasabah.php';
			 </script>
		";
		}
	}
?>
