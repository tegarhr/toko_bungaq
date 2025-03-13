<?php
    require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble Store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >


</head>
<body>

    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="logobuket3-removebg-preview.png" width="170px" height="170px">
                </div>

                <!-- Contoh navbar di index.php atau index_admin.php -->
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

                <a href="cart.php"><img src="cart.png" width="40px" height="40px"></a>
                <a href="login_form.php"><img src="account-circle-line.png" width="20px" height="20px"></a>
                <i class="ri-menu-2-fill" 
                onclick="menutoggle()"></i>
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Make Your Day <br> Always Happy!</h1>
                    <p>Buat harimu menyenangkan dengan keindahan yang dipancarkan oleh bunga.<br> Salurkan kebahagiaan dengan hadiah yang manis dan istimewakan hari-harimu.</p>
                    <a href="products.html" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="background.jpg">
                </div>
            </div>
        </div>
    </div>

    <!-- featured categories -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="gambar_produk/featuredcategories2.jpg">
                </div>
                <div class="col-3">
                    <img src="gambar_produk/featuredcategories1.jpg">
                </div>
                <div class="col-3">
                    <img src="gambar_produk/featuredcategories3.jpg">
                </div>
            </div>
        </div>
    </div>
    
    <!-- featured products -->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="gambar_produk/bucketasli.jpg">
                <h4>Bubble Store Bucket Bunga Asli</h4>
                <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
                <p>Rp. 45.000</p>
                <a href="products-details.html">Details</a>
            </div>

            <div class="col-4">
                <img src="gambar_produk/bucketbalon.jpg">
                <h4>Bubble Store Bucket Bunga Asli</h4>
                <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
                <p>Rp. 45.000</p>
                <a href="products-details.html">Details</a>
            </div>

        </div>

        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="gambar_produk/bucketbunga2.jpg">
                <h4>Bubble Store Bucket Bunga Asli</h4>
                <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
                <p>Rp. 45.000</p>
                <a href="products-details.html">Details</a>
            </div>

            <div class="col-4">
                <img src="gambar_produk/bucketpermen.jpg">
                <h4>Bubble Store Bucket Bunga Asli</h4>
                <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
                <p>Rp. 45.000</p>
                <a href="products-details.html">Details</a>
            </div>

        </div>
    </div>
    <!-- offer -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="gambar_produk/bucketwedding.jpg" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on Bubble Bucket Store</p>
                    <h1> Wedding Bucket</h1>
                    <p> Bucket ini merupakan produk eksklusif dari kami, bucket wedding yang kami sediakan menggunakan bunga asli yang masih segar dan sangat cocok untuk para pengantin.</p>
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="ri-chat-quote-fill"></i>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                    <div class="rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <img src="jisootesti-removebg-preview.png">
                    <h3>Kim Jisoo</h3>
                </div>

            </div>
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
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
            else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
</body>
</html>