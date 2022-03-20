<!DOCTYPE html>
<html>
<head>
    <title>Toko Ainun</title>
</head>

<body>
    <header>
        <h3>Formulir Penambahan Baju</h3>
    </header>

    <form action="proses-penambahan.php" method="POST">

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
            <input type="submit" value="Daftar" name="daftar" />
        </p>

    </form>

    </body>
</html>