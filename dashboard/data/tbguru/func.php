<?php 

require "../../koneksi.php";

$id = htmlspecialchars($_GET['id']);
$kode = htmlspecialchars($_GET['kode']);
$nama = htmlspecialchars($_GET['nama']);
$status = htmlspecialchars($_GET['status']);
$pelajaran = htmlspecialchars($_GET['pelajaran']);
$jam = htmlspecialchars($_GET['jam']);
$password = htmlspecialchars(password_hash($_GET['kode'], PASSWORD_DEFAULT));
$cmd = htmlspecialchars($_GET['cmd']);


if( $cmd === 'save' ) :

	$sql = "INSERT INTO tbguru (kode, nama, status, pelajaran, jam, password) VALUES('$kode','$nama','$status','$pelajaran','$jam', '$password')";
	$query = mysqli_query($conn, $sql) or die ($sql);

else :

	$sql = "UPDATE tbguru SET 
	kode = '$kode',
	nama = '$nama', 
	status = '$status', 
	pelajaran = '$pelajaran', 
	jam = '$jam' 
	WHERE kode = '$id'";
	$query = mysqli_query($conn, $sql) or die ($sql);

endif;