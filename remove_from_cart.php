<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login_form.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $user_id = $_SESSION['user_id'];
    
    $query = "DELETE FROM cart WHERE id = '$id' AND user_id = '$user_id'";
    if (mysqli_query($conn, $query)) {
        header('Location: cart.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    header('Location: cart.php');
    exit;
}
?>
