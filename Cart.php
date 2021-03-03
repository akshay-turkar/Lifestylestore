<?php  
     require "includes\common.php";
    if(!isset($_SESSION['email_id']))
    {
        header('location: Login.php');
    }
    $user_id = $_SESSION['id'];
    $selected_item_id = "SELECT users_product.product_id FROM users_product INNER "
            . "JOIN users ON users.id = users_product.user_id WHERE user_id='$user_id'";
    $selected_item_id_result = mysqli_query($con, $selected_item_id) or die(mysqli_error($con));
   
    
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
        <?php
            include 'includes\header.php';
            ?>
        <div class="container">
            
            <div class="row form">
                <div class="col-xs-6 col-xs-offset-3">
                    
                    <?php
                        if(mysqli_num_rows($selected_item_id_result) == 0)
                            {
                                echo "<div  class='jumbotron'><h1 class='display-4'>Add items to the cart first!</h1></div>";
                                echo '<a class="btn btn-primary" href="products.php" >Buy products</a>';
                            }                        
                            else{?>
                            <div class="table-responsive">
                        <table class="table table-striped  table-hover">
                            <tbody>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                                
                            <?php
                            $row = mysqli_fetch_array($selected_item_id_result);
                            $sum = 0.00;
                            while($row['product_id'] != NULL){
                                
                              $product_id = $row['product_id'];
                                $fetch_product = "SELECT id, name, price FROM products"
                                        . " WHERE id = '$product_id' ";
                                $fetch_product_result = mysqli_query($con, $fetch_product) or die(mysqli_error($con));
                                while($data = mysqli_fetch_array($fetch_product_result)){ ?>
                                <tr>
                                    <td><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['name']; ?></td>
                                    <td><?php echo $data['price']; ?></td>
                                    <td><a href="cart-remove.php?id=<?php echo $data['id'] ?>"class='remove_item_link btn btn-danger'> Remove</a></td>
                                </tr>    
                                
                                <?php
                                $sum = $sum+$data['price'];
                            }
                            $row = mysqli_fetch_array($selected_item_id_result);
                                }
                                ?>
                                <tr>
                                    <td></td>
                                    <td>Total</td>
                                    <td><?php echo "Rs-/" .$sum; ?></td>
                                    <td><button type="button" class="btn btn-primary
                                                btn-block"><a href="Sucess.php?id=<?php echo $row['id']?>">Confirm Order</a></button></td>
                                </tr>
                            </tbody>
                        </table>
                      <?php  }
                        ?>         
                                
                                
                    </div>
                </div>
            </div>
        </div>
      <?php
            include 'includes\footer.php';
            ?>
    </body>
</html>
