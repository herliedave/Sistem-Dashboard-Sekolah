<?php 

require "../../koneksi.php";

$id = $_GET['id'];


$sql = "DELETE FROM tbhari WHERE id = '$id'";
$query = mysqli_query($conn,$sql) or die ($sql);
