<?php
    require "includes\common.php";
    
    if(isset($_SESSION['email_id']))
    {
        header ('location: products.php');
    }
    
    ?>
<!DOCTYPE html>
<html>
    <head>
     <title>Sign Up |Lifestyle Store</title>
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
                <h2><b>SIGN UP</b></h2>
                <form method="POST" action="Signup_script">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" 
                               class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" 
                               class="form-control"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" 
                               class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                           title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                           id="password" required>
                        <input type="checkbox"   onclick ="showpass()" >Show Password
                    </div>
                   
                    <div class="form-group">
                        
                        <input type="number" name="contact" placeholder="Contact" 
                               class="form-control" minlength="10" maxlength="10"
                               title="Must be of 10 digits"
                               required >
                        <?php 
                            if(isset($_SESSION['Error'])){
                                echo "<div style='color:red;'>" .$_SESSION['Error'] ."</div>";
                                unset($_SESSION['Error']);
                            }
                            ?>
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" placeholder="City" 
                               class="form-control" required>
                    </div>
                    <div class="form-group">
                        <textarea  name="address" placeholder="Address" 
                                  class="form-control" required rows="3" cols="20"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
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
