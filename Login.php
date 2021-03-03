<?php
    require 'includes\common.php';
    if(isset($_SESSION['email_id']))
    {
        header ('location: Products.php');
    }
    ?>
<!DOCTYPE html>
<html>
    <head>
    <title>LogIn |Lifestyle Store</title>
    <?php
        require "includes\links.php";
        ?>
    </head>
    <body>
        <?php
        include "includes\header.php";
        ?>
        <div class="container form">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>LOGIN</h2>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning"><i>Login to make a purchase</i></p>
                            <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <?php 
                            if(isset($_SESSION['Error'])){
                                echo "<div style='color:red;'>" .$_SESSION['Error'] ."</div>";
                                unset($_SESSION['Error']);
                            }
                            ?>
                                    <input type="text" placeholder="Email" 
                                           class="form-control" required name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" id ="password" placeholder="Password" 
                                           class="form-control" required name="password" >
                                <div class="form-group">
                                    <input type="checkbox"   onclick ="showpass()" >Show Password
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account?<a href="Signup.php">Register
                                </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php
            include 'includes\footer.php';
            ?>
    <script>
        function showpass(){
            var x = document.getElementById("password");
            if(x.type === "password")
            {
                x.type = "text";
                
            }else
            {
                x.type = "password";
            }
        }
        </script>
    
    </body>
</html>
