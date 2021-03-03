<?php
    require "includes\common.php";
    if(!isset($_SESSION['email_id']))
    {
        header('location: index.php');
    }
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products | Lifestyle Store</title>
        <?php 
        include "includes\links.php";
        ?>
    </head>
    <body>
        <?php
            include 'includes\header.php';
            include 'includes\Check_if_added.php';
            ?>
        <div class="container form">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
                    have all in one place.</p>
            </div>
            <div class="item-showcase">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 items">
                    <a href="#" class="thumbnail"><img src="img/5.jpg" alt="Camera Cannon EOS">               
                <div class="discription">    
                    <h3>Cannon EOS</h3>
                    <p>Price: RS.36000.00</p>
                    <?php if (!isset($_SESSION['email_id'])) { 
                        ?>
                                <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                    if (check_if_added_to_cart(1)) {
                                        ?>
                                        <a href="Cart.php" class="btn btn-block btn-success" >Go to Cart</a>
                                    <?php
                                    } else {
                                    ?>
                                   <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
                                   btn-primary">Add to cart</a>
                                    <?php
                                    }
                                }
                     ?>
                    
                </div>
                </a>
                </div>
                <div class="col-md-3 col-sm-6 items">
                    <a href="#" class="thumbnail"><img src="img/2.jpg" alt="Camera">               
                <div class="discription">    
                    <h3>Sony DSLR</h3>
                    <p>Price: RS.40000.00</p>
                    <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                    if (check_if_added_to_cart(2)) { 
                                    echo '<a href="Cart.php" class="btn btn-block btn-success" >Go to Cart</a>';
                                    } else {
                                    ?>
                                   <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block
                                   btn-primary">Add to cart</a>
                                    <?php
                                    }
                                }
                     ?>
                </div>
                </a>
                </div>
                <div class="col-md-3 col-sm-6 items">
                    <a href="#" class="thumbnail"><img src="img/3.jpg" alt="Camera">               
                <div class="discription">    
                    <h3>Sony DSLR</h3>
                    <p>Price: RS.50000.00</p>
                    <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                    if (check_if_added_to_cart(3)) { 
                                    echo '<a href="Cart.php" class="btn btn-block btn-success" >Go to Cart</a>';
                                    } else {
                                    ?>
                                   <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block
                                   btn-primary">Add to cart</a>
                                    <?php
                                    }
                                }
                     ?>
                </div>
                </a>
                </div>
                <div class="col-md-3 col-sm-6 items">
                    <a href="#" class="thumbnail"><img src="img/4.jpg" alt="Camera">               
                <div class="discription">    
                    <h3>Olympus DSLR</h3>
                    <p>Price: RS.80000.00</p>
                    <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                    if (check_if_added_to_cart(4)) { 
                                    echo '<a href="Cart.php" class="btn btn-block btn-success" >Go to Cart</a>';
                                    } else {
                                    ?>
                                   <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block
                                   btn-primary">Add to cart</a>
                                    <?php
                                    }
                                }
                     ?>
                </div>
                </a>
                </div>
            </div>
                <div class="col-md-3 col-sm-6 items">
                    <a href="#" class="thumbnail"><img src="img/9.jpg" alt="Camera Cannon EOS">               
                <div class="discription">    
                    <h3>Titan Model #301</h3>
                    <p>Price: RS.13000.00</p>
                    <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                    if (check_if_added_to_cart(5)) { 
                                    echo '<a href="Cart.php" class="btn btn-block btn-success" >Go to Cart</a>';
                                    } else {
                                    ?>
                                   <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block
                                   btn-primary">Add to cart</a>
                                    <?php
                                    }
                                }
                     ?></div>
                </a>
                </div>
                <div class="col-md-3 col-sm-6 items">
                    <a href="#" class="thumbnail"><img src="img/10.jpg" alt="Camera">               
                <div class="discription">    
                    <h3>Titan Model #201</h3>
                    <p>Price: RS.3000.00</p>
                    <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                    if (check_if_added_to_cart(6)) { 
                                    echo '<a href="Cart.php" class="btn btn-block btn-success" >Go to Cart</a>';
                                    } else {
                                    ?>
                                   <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block
                                   btn-primary">Add to cart</a>
                                    <?php
                                    }
                                }
                     ?></div>
                </a>
                </div>
                <div class="col-md-3 col-sm-6 items">
                    <a href="#" class="thumbnail"><img src="img/11.jpg" alt="Camera">               
                <div class="discription">    
                    <h3>HMT Milan</h3>
                    <p>Price: RS.8000.00</p>
                    <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                    if (check_if_added_to_cart(7)) { 
                                    echo '<a href="Cart.php" class="btn btn-block btn-success" >Go to Cart</a>';
                                    } else {
                                    ?>
                                   <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block
                                   btn-primary">Add to cart</a>
                                    <?php
                                    }
                                }
                     ?></div>
                </a>
                </div>
                <div class="col-md-3 col-sm-6 items">
                    <a href="#" class="thumbnail"><img src="img/12.jpg" alt="Camera">               
                <div class="discription">    
                    <h3>Fuber Luba #111</h3>
                    <p>Price: RS.18000.00</p>
                    <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                    if (check_if_added_to_cart(8)) { 
                                    echo '<a href="Cart.php" class="btn btn-block btn-success" >Go to Cart</a>';
                                    } else {
                                    ?>
                                   <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block
                                   btn-primary">Add to cart</a>
                                    <?php
                                    }
                                }
                     ?></div>
                </a>
                </div>
            </div> 
          
                <div class="col-md-3 col-sm-6 items">
                    <a href="#" class="thumbnail"><img src="img/8.jpg" alt="Camera Cannon EOS">               
                <div class="discription">    
                    <h3>H&W</h3>
                    <p>Price: RS.800.00</p>
                    <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                    if (check_if_added_to_cart(9)) { 
                                    echo '<a href="Cart.php" class="btn btn-block btn-success" >Go to Cart</a>';
                                    } else {
                                    ?>
                                   <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block
                                   btn-primary">Add to cart</a>
                                    <?php
                                    }
                                }
                     ?></div>
                </a>
                </div>
                <div class="col-md-3 col-sm-6 items">
                    <a href="#" class="thumbnail"><img src="img/6.jpg" alt="Camera">               
                <div class="discription">    
                    <h3>Luis Phil</h3>
                    <p>Price: RS.1000.00</p>
                    <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                    if (check_if_added_to_cart(10)) { 
                                    echo '<a href="Cart.php" class="btn btn-block btn-success" >Go to Cart</a>';
                                    } else {
                                    ?>
                                   <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block
                                   btn-primary">Add to cart</a>
                                    <?php
                                    }
                                }
                     ?></div>
                </a>
                </div>
                <div class="col-md-3 col-sm-6 items">
                    <a href="#" class="thumbnail"><img src="img/13.jpg" alt="Camera">               
                <div class="discription">    
                    <h3>John Zok</h3>
                    <p>Price: RS.15000.00</p>
                    <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                    if (check_if_added_to_cart(11)) { 
                                   echo '<a href="Cart.php" class="btn btn-block btn-success" >Go to Cart</a>';
                                    } else {
                                    ?>
                                     <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block
                                   btn-primary">Add to cart</a>
                                    <?php
                                    }
                                }
                     ?></div>
                </a>
                </div>
                <div class="col-md-3 col-sm-6 items">
                    <a href="#" class="thumbnail"><img src="img/14.jpg" alt="Camera">               
                <div class="discription">    
                    <h3>Jhalsani</h3>
                    <p>Price: RS.13000.00</p>
                    <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                    if (check_if_added_to_cart(12)) { 
                                   echo '<a href="Cart.php" class="btn btn-block btn-success" >Go to Cart</a>';
                                    } else {
                                    ?>
                                   <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block
                                   btn-primary">Add to cart</a>
                                    <?php
                                    }
                                }
                     ?></div>
                </a>
                </div>
            </div>
        </div>
        </div>  
      <?php
            include 'includes\footer.php';
       ?>
    </body>
</html>
