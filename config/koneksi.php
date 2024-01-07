<?php
$hostname	= "localhost";
$username	= "root";
$password	= "";
$dbname		= "db_futsal";

//Langkah 1 : Koneksi ke Server Database
$conn	= mysqli_connect($hostname, $username, $password);
if (mysqli_connect_errno()) {
    echo "Gagal terhubung MySQL: " . mysqli_connect_error();
}
define('base_url', 'http://localhost/');
//Langkah 2 : Memilih Database pada server Database
?>