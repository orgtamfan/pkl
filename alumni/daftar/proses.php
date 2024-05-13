<?php
require '../koneksi.php'; 

$nama = $_POST["nama"];
$nisn = $_POST["nisn"];
$nis = $_POST["nis"];
$thn_lulus = $_POST["thn_lulus"];
$tempat = $_POST["tempat"];
$tgl_lahir = $_POST["tgl_lahir"];

$query = "INSERT INTO murid (nama, nisn, nis, thn_lulus, tempat, tgl_lahir) 
          VALUES ('$nama', '$nisn', '$nis', '$thn_lulus', '$tempat', '$tgl_lahir')";

if ($conn->query($query) === TRUE) {
    header('Location: ../index/home.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
?>
