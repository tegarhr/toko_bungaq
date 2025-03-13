<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('location:login_form.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$query = "SELECT cart.*, barang.nama_barang, barang.harga_barang, barang.foto_barang 
          FROM cart 
          JOIN barang ON cart.kode_barang = barang.kode_barang 
          WHERE cart.user_id = '$user_id'";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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

<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="uploads/<?php echo htmlspecialchars($row['foto_barang']); ?>" width="80px" height="80px">
                    <div>
                        <p><?php echo htmlspecialchars($row['nama_barang']); ?></p>
                        <small>Price: Rp. <?php echo htmlspecialchars($row['harga_barang']); ?></small>
                        <br>
                        <a href="remove_from_cart.php?id=<?php echo $row['id']; ?>">Remove</a>
                    </div>
                </div>
            </td>
            <td><?php echo htmlspecialchars($row['quantity']); ?></td>
            <td>Rp. <?php echo htmlspecialchars($row['harga_barang'] * $row['quantity']); ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <div class="total-price">
        <table>
            <?php
            $query = "SELECT SUM(barang.harga_barang * cart.quantity) AS total 
                      FROM cart 
                      JOIN barang ON cart.kode_barang = barang.kode_barang 
                      WHERE cart.user_id = '$user_id'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $total = $row['total'];
            ?>
            <tr>
                <td>Subtotal</td>
                <td>Rp. <?php echo $total; ?></td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>Rp. 0</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>Rp. <?php echo $total; ?></td>
            </tr>
        </table>
    </div>
</div>

</body>
</html>
