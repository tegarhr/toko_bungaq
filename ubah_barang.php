<?php
    require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Barang</title>
    <link rel="stylesheet" href="ubah_barang.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>

<?php
if (isset($_GET['kode'])) {
    $kode_barang = $_GET['kode'];
    $sql = mysqli_query($conn, "SELECT * FROM barang WHERE kode_barang='$kode_barang'");
    $data = mysqli_fetch_array($sql);
}
?>

<div class="container">
<h3> Ubah Barang </h3>

<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td width="130">Kode Barang</td>
            <td><input type="text" name="kode_barang" value="<?php echo htmlspecialchars($data['kode_barang']); ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_barang" value="<?php echo htmlspecialchars($data['nama_barang']); ?>" required></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><input type="number" name="harga_barang" value="<?php echo htmlspecialchars($data['harga_barang']); ?>" required></td>
        </tr>
        <tr>
            <td>Kategori Barang</td>
            <td><input type="text" name="kategori" value="<?php echo htmlspecialchars($data['kategori']); ?>" required></td>
        </tr>
        <tr>
            <td>Ukuran Barang</td>
            <td><input type="text" name="ukuran" value="<?php echo htmlspecialchars($data['ukuran']); ?>" required></td>
        </tr>
        <tr>
            <td>Foto Barang</td>
            <td><input type="file" name="foto_barang"></td>
        </tr>
        <tr>
            <td>Deskripsi Barang</td>
            <td><input type="text" name="deskripsi" value="<?php echo htmlspecialchars($data['deskripsi']); ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="proses" value="Simpan"></td>
        </tr>
    </table>
</form>

<?php
if(isset($_POST['proses'])){
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $kategori = $_POST['kategori'];
    $ukuran = $_POST['ukuran'];
    $deskripsi = $_POST['deskripsi'];
    
    // Handle file upload
    if (!empty($_FILES['foto_barang']['name'])) {
        $foto_barang = $_FILES['foto_barang']['name'];
        $temp_file = $_FILES['foto_barang']['tmp_name'];
        $target_directory = "uploads/";
        $target_file = $target_directory . basename($foto_barang);

        if (move_uploaded_file($temp_file, $target_file)) {
            $stmt = mysqli_prepare($conn, "UPDATE barang SET nama_barang=?, harga_barang=?, kategori=?, ukuran=?, foto_barang=?, deskripsi=? WHERE kode_barang=?");
            mysqli_stmt_bind_param($stmt, "sssssss", $nama_barang, $harga_barang, $kategori, $ukuran, $foto_barang, $deskripsi, $kode_barang);
        } else {
            echo "<script>alert('Gagal mengunggah foto barang!');</script>";
        }
    } else {
        $stmt = mysqli_prepare($conn, "UPDATE barang SET nama_barang=?, harga_barang=?, kategori=?, ukuran=?, deskripsi=? WHERE kode_barang=?");
        mysqli_stmt_bind_param($stmt, "ssssss", $nama_barang, $harga_barang, $kategori, $ukuran, $deskripsi, $kode_barang);
    }

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Data barang telah diubah!'); window.location='data_barang.php';</script>";
    } else {
        echo "<script>alert('Gagal mengubah data barang!');</script>";
    }

    mysqli_stmt_close($stmt);
}
?>

</body>
</html>
