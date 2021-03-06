<?php 

require "../../koneksi.php";

$kode = $_GET['kode'];


$sql = "DELETE FROM tbguru WHERE kode = '$kode'";
$query = mysqli_query($conn,$sql) or die ($sql);

if (mysqli_affected_rows($conn) < 0) :

	echo "Gagal Melakukan Perubahan";

endif;