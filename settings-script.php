<?php
include "includes\common.php";
if(!isset($_SESSION['email_id'])){
    header('location : index.php');
}
$user_id = $_SESSION['id'];
$old_pass = md5($_POST['oldpass']);
$new_pass = md5($_POST['newpass']);
$new_pass_confirm = md5($_POST['Re-newpass']);

if(!($new_pass == $new_pass_confirm))
{
    echo "dont match";
    $_SESSION['Error'] = "Both password dose not match";
    header('location: Settings.php?');
}
$select_pass = "SELECT * FROM users WHERE id ='$user_id'";
$select_pass_result = mysqli_query($con, $select_pass) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_pass_result);

if($row['password'] == $old_pass)
{
    
    $update_pass = "UPDATE users SET password = '$new_pass'";
    $update_pass_result = mysqli_query($con ,$update_pass) or die(mysqli_error($con));
    //header('location: products.php');//add validations and alert message
    
}
else
{
    $_SESSION['Error'] = "Incorrect password";
    header('location: Settings.php');
}

        