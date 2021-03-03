<?php
    function check_if_added_to_cart($product_id)
    {
        $con = mysqli_connect("localhost:3308", "root", "", "ecommerce") or die(mysqli_error($con));
        $user_id = $_SESSION['id'];
        $if_added = "SELECT * FROM users_product WHERE user_id='$user_id' AND 
                 product_id='$product_id'  AND status='Added to cart'";
        $if_added_result = mysqli_query($con, $if_added) or die(mysqli_error($con));
        if(mysqli_num_rows($if_added_result)>=1)
        {
            return 1;
        }
        else{
            return 0;
        }
        
    }
?>

