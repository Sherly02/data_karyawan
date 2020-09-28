<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_data_karyawan";

$conn = mysqli_connect($host,$user,$pass,$db);
if(!$conn){
    die ("Failed to connect ".$db." database".mysql_connect_error());
}
