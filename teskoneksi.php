<?php 
// isi nama host, username mysql, dan password mysql anda
//$host = "localhost";
//$user = "root";
//$pass = "";
//$db_name = "lingkungan";
$koneksi = mysqli_connect("localhost","root","","lingkungan");
 
if($koneksi){
	echo "koneksi berhasil <br>";
}else{
	echo "koneksi gagal.<br/>";
}
// isikan dengan nama database yang akan di hubungkan
$db = mysqli_select_db($koneksi,"lingkungan");
 
if($db){
	echo "koneksi database berhasil";}
else{
echo "koneksi database gagal.";}
exit;
//$host       = "localhost";
//$user       = "root";
//$password   = "";
//$database   = "lingkungan";
//$connect    = mysqli_connect($host, $user, $password, $database)
//if($connect)
?>