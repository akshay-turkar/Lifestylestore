<?php
    require 'includes\common.php';
    $product_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $delete_row = "DELETE FROM users_product WHERE user_id = '$user_id'"
            . "AND product_id = '$product_id' ";
    $delete_row_result = mysqli_query($con, $delete_row) or die(mysqli_error($con));
    header('location: cart.php');
?>