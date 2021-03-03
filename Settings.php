<?php
    require "includes\common.php";
    if(!isset($_SESSION['email_id'])){
        header('location : index.php');
    }
    
  ?>
<!DOCTYPE html>
<html>
    <head>
         <title>Settings | Lifestyle Store</title>
        <?php 
        include "includes\links.php";
        ?>
    </head>
    <body>
         <?php
            include 'includes\header.php';
            ?>
        <div class="container form">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <h2>Change Password</h2>
                    <form method="POST" action="settings-script.php">
                        <div class="form-group">
                            <input type="password" name="oldpass" 
                                   id="password" placeholder="Old Password" class="form-control" required>
                            <input type="checkbox"   onclick ="showpass()" >Show Password
                         <?php 
                            if(isset($_SESSION['Error'])){
                                echo "<div style='color:red;'>" .$_SESSION['Error'] ."</div>";
                                unset($_SESSION['Error']);
                            }
                            ?>
                        </div> 
                        <div class="form-group">
                            <input type="password" name="newpass" 
                                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                           title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                           placeholder="New Password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="Re-newpass" 
                                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                           title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Re-Type New Password" class="form-control" required>
                            <?php 
                            if(isset($_SESSION['Error'])){
                                echo "<div style='color:red;'>" .$_SESSION['Error'] ."</div>";
                                unset($_SESSION['Error']);
                            }
                               
                            
                            ?>
                        </div>    
                            <button type="submit" class="btn btn-primary">Change</button>
            
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
