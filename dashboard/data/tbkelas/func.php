<?php 

require "../../koneksi.php";

$no = htmlspecialchars($_GET['no']);
$nama = htmlspecialchars($_GET['nama']);
$kapasitas = htmlspecialchars($_GET['kapasitas']);
$cmd = htmlspecialchars($_GET['cmd']);


if( $cmd === 'save' ) :

	$sql = "INSERT INTO tbkelas (nama, kapasitas) VALUES('$nama','$kapasitas')";
	$query = mysqli_query($conn, $sql) or die ($sql);

else :

	$sql = "UPDATE tbkelas SET 
	kapasitas = '$kapasitas',
	nama = '$nama' 
	WHERE no = '$no'";
	$query = mysqli_query($conn, $sql) or die ($sql);

endif;


if (mysqli_affected_rows($conn) > 0) :

	echo "Berhasil Melakukan perubahan";

else :

	echo "Gagal Melakukan Perubahan $sql";

endif;
