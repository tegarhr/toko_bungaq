 <?php
    require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >

</head>
<body>
    
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> <span>Bubble Bucket</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="tambah_barang.php"><span class="las la-receipt"></span><span>Tambah Barang</span></a>
                </li>
                <li>
                    <a href="data_barang.php"><span class="las la-clipboard-list"></span><span>Data Barang</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-shopping-bag"></span><span>Orders</span></a>
                </li>
                
                <li>
                    <a href=""><span class="las la-user-circle"></span><span>Accounts</span></a>
                </li>
                
                <li>
                    <a href="../index.php"><span class="las la-logout"></span><span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>

            <div class="user-wrapper">
                <img src="jisootesti-removebg-preview.png" width="40px" height="40px" alt="">
                <div>
                    <h4>Kim Jisoo</h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Projects</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>124</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>5 juta</h1>
                        <span>Income</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Projects</h3>
                            
                            <button>See all <span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Project Title</td>
                                            <td>Department</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>UI/UX Design</td>
                                            <td>UI Team</td>
                                            <td>
                                                <span class="status purple"></span>
                                                review
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Web development</td>
                                            <td>Frontend</td>
                                            <td>
                                                <span class="status pink"></span>
                                                in progress
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ushop app</td>
                                            <td>Mobile Team</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                        </tr>
                        
                                        <tr>
                                            <td>UI/UX Design</td>
                                            <td>UI Team</td>
                                            <td>
                                                <span class="status purple"></span>
                                                review
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Web development</td>
                                            <td>Frontend</td>
                                            <td>
                                                <span class="status pink"></span>
                                                in progress
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ushop app</td>
                                            <td>Mobile Team</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td>UI/UX Design</td>
                                            <td>UI Team</td>
                                            <td>
                                                <span class="status purple"></span>
                                                review
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Web development</td>
                                            <td>Frontend</td>
                                            <td>
                                                <span class="status pink"></span>
                                                in progress
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ushop app</td>
                                            <td>Mobile Team</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>New customer</h3>
                            
                            <button>See all <span class="las la-arrow-right"></span></button>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="jisootesti-removebg-preview.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Jisoo Kim</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="jisootesti-removebg-preview.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Jisoo Kim</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="jisootesti-removebg-preview.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Jisoo Kim</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="jisootesti-removebg-preview.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Jisoo Kim</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="jisootesti-removebg-preview.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Jisoo Kim</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="jisootesti-removebg-preview.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Jisoo Kim</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>