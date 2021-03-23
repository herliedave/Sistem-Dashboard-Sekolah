<?php 

require "../../koneksi.php";

$no = $_GET['no'];


$sql = "DELETE FROM tbkelas WHERE no = '$no'";
$query = mysqli_query($conn,$sql) or die ($sql);
