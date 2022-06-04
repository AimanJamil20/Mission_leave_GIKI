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


        </body>
    </head>
</html>


<?php
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
    <h2>List of all Students</h2>
    <?php

        $res=mysqli_query($db,"SELECT * FROM `student`;");
        echo"<table class='table table-bordered table-hover' >";
        echo "<tr style='background-color: white;'>";
        echo "<th>"; echo "reg_no";  echo "</th>";
        echo "<th>"; echo "first_name";  echo "</th>";
        echo "<th>"; echo "last_name";  echo "</th>";
        echo "<th>"; echo "Faculty";  echo "</th>";
        echo "<th>"; echo "Email";  echo "</th>";
        echo "</tr>";

        $res=mysqli_query($db,"SELECT * FROM `student`;");

        while($row=mysqli_fetch_assoc($res)){
        	echo "<tr>";
        	echo "<tr style='background-color: white;'>";
        	echo "<td>"; echo $row['REG_NO']; echo"</td>";    
        	echo "<td>"; echo $row['FIRST_NAME']; echo"</td>";
        	echo "<td>"; echo $row['LAST_NAME']; echo"</td>";
        	echo "<td>"; echo $row['FACULTY']; echo"</td>";
        	echo "<td>"; echo $row['EMAIL']; echo"</td>"; 
        	echo "</tr>";
        	}

        echo"</table>"

;    ?>
</body>
</html>