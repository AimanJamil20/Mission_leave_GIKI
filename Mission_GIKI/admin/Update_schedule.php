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
               <div class="box1">
                <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> &nbsp TRANSPORT SCHEDULE</h1>
                <h1 style="text-align: center; font-size: 25px;">Updating schedule</h1>
              <form name="Updating Schedule" action="" method="POST">
                
                <div class="update_SCHEDULE">
                  <label>Bus ID</label>
                  <input class="form-control" type="number" name="bus_id" placeholder="Bus Id" required=""> <br>
                  <label>Date</label>
                  <input class="form-control" type="date" name="date" placeholder="Date" required=""> <br>
                  <label>Departure Time</label>
                  <input class="form-control" type="timestamp" name="depart_time" placeholder="Departure Time" required="">
                 
                  <input class="btn btn-default" type="submit" name="submit" value="Update" style="color: black; width: 70px; height: 30px"> </div>
              </form>
            
          </div>
        </div>
            <?php

                if(isset($_POST['submit']))
                {
                   mysqli_query($db,"UPDATE schedule set date = '$_POST[date]', depart_time = '$_POST[depart_time]'
                    where bus_id = '$_POST[bus_id]';")

                   ?>
                   <script type="text/javascript">
                   alert("Transport Data Updated Successfully");
                   window.location="Transport.php"
              </script>

              
              <?php



                }
           
?>


          </body>
</html>

