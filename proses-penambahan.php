<?php

include("config.php");

if(isset($_POST['daftar'])){

    $merk = $_POST['merk'];
    $warna = $_POST['warna'];
    $ukuran = $_POST['ukuran'];

    $sql = "INSERT INTO baju (merk, warna, ukuran) VALUE ('$merk', '$warna', '$ukuran')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list.php?status=sukses');
    } else {
        header('Location: list.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>