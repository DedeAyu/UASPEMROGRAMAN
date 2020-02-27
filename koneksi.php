<?php
$server="localhost";
$user="root"; // ini berlaku di xampp
$password=""; // ini berlaku di xampp
$database="uas_semester3_ayu";

// melakukan koneksi ke database
$home=mysqli_connect($server,$user,$password);

// cek koneksi yang kita lakukan berhasil
if($home){
	echo '';
}else{
	echo '';
}
$db=mysqli_select_db($home,$database);
if($db){
	echo '';
}else{
	echo '';
}
?>