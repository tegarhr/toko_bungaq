<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="tambah_barang.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>

<div class="container">
    <h3> Tambah Barang</h3>

    <form action="tambah_barang.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td width="130">Kode Barang</td>
                <td><input type="text" name="kode_barang" required></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" required></td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td><input type="number" name="harga_barang" required></td>
            </tr>
            <tr>
                <td>Kategori Barang</td>
                <td><input type="text" name="kategori" required></td>
            </tr>
            <tr>
                <td>Ukuran Barang</td>
                <td><input type="text" name="ukuran" required></td>
            </tr>
            <tr>
                <td>Foto Barang</td>
                <td><input type="file" name="foto_barang" accept="image/*" required></td>
            </tr>
            <tr>
                <td>Deskripsi Barang</td>
                <td><input type="text" name="deskripsi" required></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="proses" value="Simpan">Submit</button></td>
            </tr>
        </table>
    </form>
</div>

<?php
require 'config.php'; // Pastikan file config.php tersedia dan berisi koneksi ke database

if (isset($_POST['proses'])) {
    $kode_barang = htmlspecialchars($_POST['kode_barang']);
    $nama_barang = htmlspecialchars($_POST['nama_barang']);
    $harga_barang = htmlspecialchars($_POST['harga_barang']);
    $kategori = htmlspecialchars($_POST['kategori']);
    $ukuran = htmlspecialchars($_POST['ukuran']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);

    // Handle file upload
    $foto_barang = $_FILES['foto_barang']['name'];
    $temp_file = $_FILES['foto_barang']['tmp_name'];
    $target_directory = "uploads/"; // Folder untuk menyimpan gambar
    $target_file = $target_directory . basename($foto_barang);

    // Check if file upload is successful
    if (move_uploaded_file($temp_file, $target_file)) {
        // Insert data into the database
        $query = "INSERT INTO barang (kode_barang, nama_barang, harga_barang, kategori, ukuran, foto_barang, deskripsi) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "sssssss", $kode_barang, $nama_barang, $harga_barang, $kategori, $ukuran, $foto_barang, $deskripsi);
        if (mysqli_stmt_execute($stmt)) {
            // Redirect to the page displaying data
            header("Location: data_barang.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
</body>
</html>
