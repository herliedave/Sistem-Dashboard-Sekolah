<?php 

require "../../koneksi.php";

$nis = $_GET['nis'];


$sql = "DELETE FROM tbsiswa WHERE nis = '$nis'";
$query = mysqli_query($conn,$sql) or die ($sql);