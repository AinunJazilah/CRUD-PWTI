<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $merk = $_POST['merk'];
    $warna = $_POST['warna'];
    $ukuran = $_POST['ukuran'];

    $sql = "UPDATE baju SET merk='$merk', warna='$warna', ukuran='$ukuran' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>