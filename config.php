<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "toko_bunga";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fungsi untuk menjalankan query
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Fungsi untuk mengunggah gambar
function upload() {
    $namaFile = $_FILES['foto_barang']['name'];
    $ukuranFile = $_FILES['foto_barang']['size'];
    $error = $_FILES['foto_barang']['error'];
    $tmpName = $_FILES['foto_barang']['tmp_name'];

    // Cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
        return false;
    }

    // Cek apakah yang diupload itu adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>alert('Yang Anda upload bukan gambar!');</script>";
        return false;
    }

    // Cek jika ukuran gambar terlalu besar
    if ($ukuranFile > 100000) {
        echo "<script>alert('Ukuran gambar terlalu besar!');</script>";
        return false;
    }

    // Lolos pengecekan, gambar siap diupload
    // Buat nama file baru yang unik
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.' . $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}

?>
