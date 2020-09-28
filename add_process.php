<?php

include 'connection.php';

$nama       = $_POST['nama'];
$alamat     = $_POST['alamat'];
$tgl_lahir  = $_POST['tgl_lahir'];
$departement= $_POST['departement'];

$query = "INSERT INTO tbl_karyawan (nama, alamat, tgl_lahir, departement) 
          VALUES ('$nama', '$alamat', '$tgl_lahir', '$departement')";
$result = mysqli_query($conn, $query);

if(!$result){
    die ("Failed to run query! ".mysqli_errno($conn).
        " - ".mysqli_error($conn));
} else {
    echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php';</script>";
}