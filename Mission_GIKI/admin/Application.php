<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application</title>
    <link rel="stylesheet" href="ap_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap"  
    rel="stylesheet">
</head>
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
                          <li><a href='approve.php'>APPROVAL</a></li>
                          
                        </ul>
                    </nav>
        

        </div>
         <br><br><br>
        <h2>Student Form Information</h2>
    <?php

        $res=mysqli_query($db,"SELECT * FROM `form`;");
        echo"<table class='table table-bordered table-hover' >";
        echo "<tr style='background-color: white;'>";
        echo "<th>"; echo "Form_id";  echo "</th>";
        echo "<th>"; echo "Name";  echo "</th>";
        echo "<th>"; echo "Date";  echo "</th>";
        echo "<th>"; echo "Subject";  echo "</th>";
        echo "<th>"; echo "Application";  echo "</th>";
        echo "<th>"; echo "approval_status";  echo "</th>";
        echo "</tr>";

        $res=mysqli_query($db,"SELECT * FROM `form`;");

        while($row=mysqli_fetch_assoc($res)){
            echo "<tr>";
            echo "<tr style='background-color: white;'>";
            echo "<td>"; echo $row['Form_id']; echo"</td>";    
            echo "<td>"; echo $row['Name']; echo"</td>";
            echo "<td>"; echo $row['Date']; echo"</td>";
            echo "<td>"; echo $row['Subject']; echo"</td>";
            echo "<td>"; echo $row['Application']; echo"</td>";
            echo "<td>"; echo $row['approval_status']; echo"</td>";   
            echo "</tr>";
            }

        echo"</table>"

;    ?>
  
</body>
</html>