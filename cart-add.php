
<?php
require 'includes\common.php';
$product_id = $_GET["id"];
$user_id = $_SESSION['id'];
$add_item = "INSERT INTO users_product(user_id, product_id, status) VALUES('$user_id', '$product_id','Added to cart')";
$add_item_result = mysqli_query($con, $add_item) or die(mysqli_error($con));
header('location: Products.php');
?>

