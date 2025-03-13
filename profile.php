<?php
session_start();
@include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('location:login_form.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM user_form WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $user_data = mysqli_fetch_assoc($result);
} else {
    echo "User data not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="container">
        <div class="profile-box">
            <img src="menu.png" class="menu-icon" alt="Menu Icon">
            <img src="setting.png" class="setting-icon" alt="Setting Icon">
            
            <h3><?php echo htmlspecialchars($user_data['name']); ?></h3>
            <p><?php echo htmlspecialchars($user_data['email']); ?></p>
            <div class="social-media">
                <img src="facebook.png" alt="Facebook">
                <img src="twitter.png" alt="Twitter">
                <img src="instagram.png" alt="Instagram">
            </div>
            <button type="button">My Accounts</button>
            <div class="profile-bottom">
                
            </div>
        </div>
    </div>
</body>
</html>
