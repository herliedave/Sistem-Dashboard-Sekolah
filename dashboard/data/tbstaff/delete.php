<?php 

require "../../koneksi.php";

$kode = $_GET['kode'];


$sql = "DELETE FROM tbstaff WHERE kode = '$kode'";
$query = mysqli_query($conn,$sql) or die ($sql);