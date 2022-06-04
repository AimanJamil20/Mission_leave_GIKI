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
               <div class="box3">
                <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> &nbsp TRANSPORT SCHEDULE</h1>
                <h1 style="text-align: center; font-size: 25px;">Adding schedule</h1>
              <form name="Adding Schedule" action="" method="post">
                
                <div class="ADD_SCHEDULE">
                  <label>Bus ID</label>
                  <input class="form-control" type="number" name="bus_id" placeholder="Bus Id" required=""> <br>
                  <label>Date</label>
                  <input class="form-control" type="date" name="date" placeholder="Date" required=""> <br>
                  <label>Departure Time</label>
                  <input class="form-control" type="timestamp" name="depart_time" placeholder="Departure Time" required=""> <br>
                  <label>Location</label>
                  <input class="form-control" type="text" name="to_loc" placeholder="location" required=""> <br>
                 
                  <input class="btn btn-default" type="submit" name="submit" value="Add" style="color: black; width: 70px; height: 30px"> </div>
              </form>
            
          </div>
        </div>
            <?php

                if(isset($_POST['submit']))
                {
                   mysqli_query($db,"INSERT into schedule VALUES('$_POST[bus_id]', '$_POST[date]', '$_POST[depart_time]', '$_POST[to_loc]');")

                   ?>
                   <script type="text/javascript">
                   alert("Transport Data Added Successfully");
                   window.location="Transport.php"
              </script>

              
              <?php



                }
           
?>


          </body>
</html>

