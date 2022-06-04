<?php
include "connection.php";
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Transport</title>
        <link rel = "stylesheet" type = "text/css" href = "bk_style.css">
        <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <body>


              </header>
              <!-------------- navigation part end -------------->
              <!------------------- FORM FOR ADDING schedule---------->
               <div class="box2">
                <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> &nbsp TRANSPORT SCHEDULE</h1>
                <h1 style="text-align: center; font-size: 25px;">Deleting schedule</h1>
              <form name="Deleting Schedule" action="" method="post">
                
                <div class="Deleting_SCHEDULE">
                  <label>Bus ID</label>
                  <input class="form-control" type="number" name="bus_id" placeholder="Bus Id" required=""> <br><br>
                 
                  <input class="btn btn-default" type="submit" name="submit" value="Delete" style="color: black; width: 70px; height: 30px"> </div>
              </form>
            
          </div>
        </div>
            <?php

                if(isset($_POST['submit']))
                {
                   mysqli_query($db,"DELETE from schedule where bus_id = '$_POST[bus_id]';")

                   ?>
                   <script type="text/javascript">
                   alert("Transport Data Deleted Successfully");
                   window.location="Transport.php"
              </script>

              
              <?php



                }
           
?>


          </body>
</html>

