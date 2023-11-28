<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nasabah</title>
    <style>
        h2 {
            text-align: center;
            color: blue;

        }
    </style>
</head>
<body>
    <h2><i>Form Data Nasabah</i></h2>
    <form action="simpan_nasabah.php" method="post" align="center">
        <input type="number" name="norek" placeholder="Norek"><br><br>
        <input type="text" name="nama" placeholder="Nama"><br><br>
        <textarea name="alamat" placeholder="Alamat"></textarea><br><br>
        <label>Tanggal Lahir</label><br>
        <input type="date" value="Tanggal Lahir" name="tanggalLahir"><br><br>
        <input type="submit" value="Submit" name="submit">
        <a href="lihat_nasabah.php">
        <input type="button" value="Lihat" name="lihat">
        </a>

    </form>
</body>
</html>