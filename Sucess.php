<?php 
    require "includes\common.php";
    $user_id = $_SESSION['id'];
    if(!isset($_SESSION['email_id']))
    {
        header('location: index.php');
    }
    $confirm_order = "UPDATE users_product SET status='Confirmed' WHERE user_id='$user_id' ";
    $confirm_order_result = mysqli_query($con , $confirm_order) or die(mysqli_error($con))
    
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart |Lifestyle Store</title>
    <?php 
        include "includes\links.php";
        ?>
    </head>
    <body>
        <div class="container form">
            <div class="row">
                <div class="col-xs-6 
                     col-xs-offset-3">
                    <div class="jumbotron sucess">
                        <h2>Hurray!! Your order is confirmed.</h2> 
                        <p><b>Thank you for shopping
                            with us. <a href="Products.php ">Click here</a> to 
                            purchase any other item.</b></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
