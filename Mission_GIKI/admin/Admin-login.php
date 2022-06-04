<?php
  include "connection.php";
  session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin_Login</title>  
        <link rel = "stylesheet" type = "text/css" href = "style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">          


    </head>
    <body>
        <header>
            <div class="navbar">
                    <nav>
                        <ul id="MenuItems">
                            <li><a href='Index.php'>Front-Page</a></li>
                        </ul>
                    </nav>
                </div>
        </header>
        <section>
           <form name="Login" action="" method="post">
            <div class="loginbox">
                <h3>Admin Login Here</h3>
                <form>

                    <p>Email ID</p>
                    <input  type="text" name="admin_email" placeholder="Enter Email ID" required="">
                    <p>Password</p>
                    <input type="password" name="admin_password" placeholder="Enter Password" required="">
                    <input type="submit" name="submit" value="Login">
                    <a href="a">Forgot Password</a>
                </form>
            </div>
        </form>
        </section>

    <?php
    
    if(isset($_POST['submit'])){
        $count=0;
        $res=mysqli_query($db,"SELECT * FROM `admin` where admin_email= '$_POST[admin_email]' && admin_password= '$_POST[admin_password]';");

        $row = mysqli_fetch_assoc($res);
        $count=mysqli_num_rows($res);

        if($count==0){

        ?>
        
           <!--<script type ="text/javascript">
                 alert("The username and password doesn't exist");
            </script>--> 
            <div class="alert alert-danger" style="width: 700px; margin-left: 300px; background-color: #de1313; color: white">
                <strong>The username and password doesn't match</strong>
            </div>
        <?php

        }
        else
        {
            $_session['login_user'] = $_POST['admin_email'];
            ?>
                <script type ="text/javascript">
                    window.location="Home.php"
                </script>

            <?php
        }

    }

    
    ?>
        

    
    </body>
</html>



            