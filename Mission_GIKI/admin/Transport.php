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
                <div class="navbar">
                    <nav>
                        <ul id="MenuItems">
                          <li><a href='Home.php'>Home</a></li>
                          <li><a href='Application.php'>Application</a></li>
                          <li><a href='Transport.php'>Transport</a></li>
                            <li><a href='index.php'>Log Out</a></li>
                        </ul>
                    </nav>
                  </div>
                  <div>
                    <nav>
                        <ul id="MenuItems">
                          <li><a href='Add_schedule.php'>ADD</a></li>
                          <li><a href='Update_schedule.php'>UPDATE</a></li>
                          <li><a href='Delete_schedule.php'>DELETE</a></li>
                          
                        </ul>
                    </nav>
                </div>

<section>
    <h2>Schedule</h2>
    <?php

        $res=mysqli_query($db,"SELECT * FROM `schedule`;");
        echo"<table class='table table-bordered table-hover' >";
          //echo "<tr style='max-height: 400px'>";
          //echo "<tr style='max-width: 400px'>";
            //echo "<tr style='margin-left: 50px'>";
        echo "<tr style='background-color: white;'>";
        echo "<th>"; echo "Bus_ID";  echo "</th>";
        echo "<th>"; echo "Date";  echo "</th>";
        echo "<th>"; echo "Departure Time";  echo "</th>";
        echo "<th>"; echo "To Location";  echo "</th>";
        echo "</tr>";

        $res=mysqli_query($db,"SELECT * FROM `schedule`;");

        while($row=mysqli_fetch_assoc($res)){
          echo "<tr>";
          //echo"<table class='table table-bordered table-hover' >";
            //echo "<tr style='max-height: 400px'>";
            //echo "<tr style='margin-left: 50px'>";
            //echo "<tr style='max-width: 400px'>";

            echo "<tr style='background-color: white;'>";
          echo "<td>"; echo $row['bus_id']; echo"</td>";    
          echo "<td>"; echo $row['date']; echo"</td>";
          echo "<td>"; echo $row['depart_time']; echo"</td>";
          echo "<td>"; echo $row['to_location']; echo"</td>";   
          echo "</tr>";
          }

        echo"</table>"

;    ?>

</section>

</body>
</html>