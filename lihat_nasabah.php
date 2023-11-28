<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            justify-content: center;
        }
        table {
            border-collapse: collapse;
            
        }
        .genap {
            background-color: green;
        }
        .ganjil {
            background-color: aqua;
        }
        tr:hover {
            background-color: red;
        }
    </style>
</head>
<body>

<?php 
include "koneksi.php";
$nsb = mysqli_query($koneksi, "SELECT * FROM nasabah");
$jm_baris = mysqli_num_rows($nsb);

echo "<table border=1>
<tr>
    <td>No</td>
    <td>Norek</td>
    <td>Nama</td>
    <td>Alamat</td>
    <td>Tanggal Lahir</td>
</tr>";
for ($k=1; $k<=$jm_baris; $k++){
    $data = mysqli_fetch_array($nsb);
    if($k % 2 == 1){
        echo "<tr class=ganjil>
            <td>$k</td>
            <td>$data[norek]</td>
            <td>$data[nama]</td>
            <td>$data[alamat]</td>
            <td>$data[tanggalLahir]</td>
        </tr>";
    }
    else {
        echo "<tr class=genap>
            <td>$k</td>
            <td>$data[norek]</td>
            <td>$data[nama]</td>
            <td>$data[alamat]</td>
            <td>$data[tanggalLahir]</td>
        </tr>";
    }
}

echo  "</table>";
?>

</body>
</html>
