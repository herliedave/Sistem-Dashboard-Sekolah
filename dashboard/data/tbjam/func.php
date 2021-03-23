<?php 

require "../../koneksi.php";

$no = htmlspecialchars($_GET['no']);
$range_jam = htmlspecialchars($_GET['range_jam']);
$cmd = htmlspecialchars($_GET['cmd']);


if( $cmd === 'save' ) :

	$sql = "INSERT INTO tbjam (range_jam) VALUES('$range_jam')";
	$query = mysqli_query($conn, $sql) or die ($sql);

else :

	$sql = "UPDATE tbjam SET 
	range_jam = '$range_jam'
	WHERE no = '$no'";
	$query = mysqli_query($conn, $sql) or die ($sql);

endif;


if (mysqli_affected_rows($conn) > 0) :

	echo "Berhasil Melakukan perubahan";

else :

	echo "Gagal Melakukan Perubahan $sql";

endif;
