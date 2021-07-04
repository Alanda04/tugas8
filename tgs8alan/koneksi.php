<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "alandajiwani_311910785";
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
echo "Koneksi ke server gagal.";
die();
} #else echo "Koneksi berhasil";
?>