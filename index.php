<?php
    require 'includes\common.php';
    if (isset($_SESSION['email_id'])) {
        
        header('location: Products.php');
    }
    ?>


<!DOCTYPE html>
<head>
    <title>Lifestyle Store</title>
    <?php
        include "includes\links.php";
        ?>
</head>
<body>
    <?php
        include 'includes\header.php';
    ?>
    
    <div class="content">
        <div class="banner-image">
            <div class="inner-banner-image">
                <div class="banner-content">
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p>
                    <div class="button"><a href="Login.php">Shop Now</a></div>
                    
                </div> 
            </div>
        </div>
    </div>
    <div class="container-fluid item-showcase">
        <div class="row">
            <div class="col-xs-4 items">
                <a href="Login.php" class="thumbnail"><img src="img/1.jpg" alt="Camera">               
                <div class="discription">    
                    <h3>Cameras</h3>
                    <p>Choose among the best available in the world.</p>
                </div>
                </a>
            </div>
            <div class="col-xs-4 items">
                <a href="Login.php" class="thumbnail"><img src="img/7.jpg" alt="Watch">
                 <div class="discription">
                    <h3>Watches</h3>
                    <p>Original watches from the best brands.</p>
                </div>
                </a>
            </div>
            <div class="col-xs-4 items">
                <a href="Login.php" class="thumbnail"><img src="img/8.jpg" alt="Shirt">
                <div class="discription">
                    <h3>Shirts</h3>
                    <p>Our exquisite collection of shirts.</p>
                </div>
                </a>
            </div>
        </div>
       </div>
    <?php
            include 'includes\footer.php';
            ?>
    
</body>
</html>
