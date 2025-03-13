<?php
require 'config.php'; // Pastikan file config.php tersedia dan berisi koneksi ke database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble Store - All Products</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
    <div class="search-wrapper">
        <span class="las la-search"></span>
        <input type="search" placeholder="Search here" />
    </div>
    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Sorting</option>
                <option>Sort by price</option>
                <option>Sort by popularity</option>
                <option>Sort by rating</option>
                <option>Sort by sale</option>
            </select>
        </div>
        <div class="row">
        <?php
        $query = "SELECT * FROM barang";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='col-4'>
                    <img src='uploads/{$row['foto_barang']}' alt='Foto Produk'>
                    <h4>{$row['nama_barang']}</h4>
                    <div class='rating'>
                        <i class='ri-star-fill'></i>
                        <i class='ri-star-fill'></i>
                        <i class='ri-star-fill'></i>
                        <i class='ri-star-fill'></i>
                        <i class='ri-star-fill'></i>
                    </div>
                    <p>Rp. {$row['harga_barang']}</p>
                    <a href='products-details.php?kode={$row['kode_barang']}'>Details</a>
                </div>";
            }
        ?>

        </div>
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <img src="logobuket3-removebg-preview.png">
                    <p>Dapatkan berbagai jenis bucket dengan kualitas yang terjamin di Bubble Bucket Store</p>
                </div>
                <div class="footer-col-2">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-3">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2023 - Bubble Bucket Store</p>
        </div>
    </div>
    <!--- js for toggle menu --->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
</body>
</html>
