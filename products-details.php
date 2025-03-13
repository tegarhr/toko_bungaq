<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('location:login_form.php');
    exit;
}

if (isset($_GET['kode'])) {
    $kode_barang = $_GET['kode'];
    $result = mysqli_query($conn, "SELECT * FROM barang WHERE kode_barang='$kode_barang'");
    $tampil = mysqli_fetch_array($result);

    if ($tampil) {
        $foto_url = 'uploads/' . $tampil['foto_barang'];
    } else {
        echo "Product not found.";
        exit;
    }
} else {
    echo "No product specified.";
    exit;
}

if (isset($_POST['add_to_cart'])) {
    $user_id = $_SESSION['user_id'];
    $kode_barang = $_POST['kode_barang'];
    $quantity = $_POST['quantity'];

    $query = "INSERT INTO cart (user_id, kode_barang, quantity) VALUES ('$user_id', '$kode_barang', '$quantity')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    header('location:cart.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="logobuket3-removebg-preview.png" width="170px" height="170px">
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contactus.html">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <a href="cart.php"><img src="cart.png" width="50px" height="50px"></a>
        
        <i class="ri-menu-2-fill" onclick="menutoggle()"></i>
    </div>
</div>

<div class="small-container-single-product">
    <div class="row">
        <div class="col-2">
            <img src="<?php echo $foto_url; ?>" width="100%" id="ProductImg">
        </div>
        <div class="col-2">
            <p>Home / <?php echo htmlspecialchars($tampil['nama_barang']); ?></p>
            <h1><?php echo htmlspecialchars($tampil['nama_barang']); ?></h1>
            <h4>Rp. <?php echo htmlspecialchars($tampil['harga_barang']); ?></h4>
            <form method="post">
                <input type="hidden" name="kode_barang" value="<?php echo $kode_barang; ?>">
                <select name="size">
                    <option value="Besar">Besar</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Kecil">Kecil</option>
                </select>
                <input type="number" name="quantity" value="1">
                <input type="submit" name="add_to_cart" value="Add To Cart" class="btn">
            </form>
            <h3>Product Details <i class="ri-indent-decrease"></i></h3>
            <br>
            <p><?php echo htmlspecialchars($tampil['deskripsi']); ?></p>
        </div>
    </div>
</div>

</body>
</html>
