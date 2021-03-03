<?php
require "includes\common.php";
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$contact = $_POST['contact'];
if(strlen($contact) != 10)
{
    $_SESSION['Error'] = "Must contain only 10 digits";
    header('location: signup.php');
}
$city = $_POST['city'];
$address = $_POST['address'];
$if_exist = "SELECT id FROM users WHERE email_id = '$email'";
$if_exist_result = mysqli_query($con, $if_exist) or die(mysqli_error($con));

if(mysqli_num_rows($if_exist_result)>0){
    header('location: Signup.php?error_email = existing user');
}
else{
   $insert_user = "INSERT INTO users(email_id, name, contact, city, address, password) VALUES('$email','$name', '$contact', '$city', '$address', '$password')";
   $insert_user_result = mysqli_query($con, $insert_user) or die(mysqli_error($con));
   $_SESSION['id'] = mysqli_insert_id($con);
   $_SESSION['email_id'] = $email;
   echo $_SESSION['id'];
   header('location: Products.php?id=$_SESSION["email_id"]');
   
}
?>


