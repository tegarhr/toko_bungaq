<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="data_barang.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>

<div class="product-display">
<h3>Data Barang</h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Kategori</th>
        <th>Ukuran</th>
        <th>Foto Barang</th>
        <th>Deskripsi</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    $no = 1;
    $ambildata = mysqli_query($conn, "SELECT * FROM barang");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        // Construct the image URL
        $foto_url = 'uploads/' . $tampil['foto_barang'];

        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[kode_barang]</td>
            <td>$tampil[nama_barang]</td>
            <td>$tampil[harga_barang]</td>
            <td>$tampil[kategori]</td>
            <td>$tampil[ukuran]</td>
            <td><img src='$foto_url' alt='Foto Barang' style='width: 100px; height: 100px;'></td>
            <td>$tampil[deskripsi]</td>
            <td><a href='?kode=$tampil[kode_barang]'> Hapus </a></td>
            <td><a href='ubah_barang.php?kode=$tampil[kode_barang]'> Ubah </a></td>
        </tr>";
        $no++;
    }
    ?>

</table>

<?php
if (isset($_GET['kode'])) {
    $kode_barang = $_GET['kode'];
    mysqli_query($conn, "DELETE FROM barang WHERE kode_barang='$kode_barang'");
    echo "<script>alert('Data telah terhapus');</script>";
    echo "<meta http-equiv='refresh' content='0;URL=data_barang.php'>";
}
?>

</div>

</body>
</html>
