<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: list.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM baju WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Toko Ainun</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Baju</h3>
    </header>

    <form action="proses-edit.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="merk">merk: </label>
            <input type="text" name="merk" placeholder="merk" value="<?php echo $siswa['merk'] ?>" />
        </p>
        <p>
            <label for="warna">Warna: </label>
            <input type="text" name="warna" placeholder="warna baju" />
        </p>
        <p>
            <label for="ukuran">ukuran: </label>
            <input type="text" name="ukuran" placeholder="ukuran" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>


    </form>

    </body>
</html>