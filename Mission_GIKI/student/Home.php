
<?php
include "connection.php";
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel = "stylesheet" type = "text/css" href = "ap_style.css">
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


<body><br><br><br><br>
    <br><br>
    <h2>Approval Information</h2>
    <br>
    <br>
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
       // $_SESSION['login-user'] = $_POST['Name'];

        //if(isset($_SESSION['login-user'])){
            
             //<div>
             //echo &_SESSION['login-user'];
            // </div>
            
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