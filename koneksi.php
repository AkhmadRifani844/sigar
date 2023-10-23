<?php 

$server = 'localhost';
$user = 'root';
$password = '';
$nama_database = 'inovasi';

$db=mysqli_connect($server,$user,$password,$nama_database);

if(!$db){
	die("<script>alert('Gagal terhubung dengan database');</script>".mysqli_connect_error());
 }

