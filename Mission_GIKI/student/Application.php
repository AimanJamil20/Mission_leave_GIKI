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
    <div class="container">
        <h1>Application</h1>
        <div class="application-box">
            <div class="application-left">
                <h3>Send your request</h3>
                <form name="Application" action="" method="post">
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <label>Name</label>
                            <input class="form-control" type="text" name=" Name" placeholder="Enter Name">
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <label>Date</label>
                            <input class="form-control" type="date" name="Date" placeholder="Enter Application date: ">
                        </div>
                        <div class="col-sm-10">
                            <label>Subject</label>
                            <input class="form-control" type="text" name="Subject" placeholder="Enter Subject">
                        </div>
                        <div class="col-sm-10">
                            <label>Approval Status</label>
                            <input class="form-control" type="text" name="approval_status" placeholder="Enter Approval Status">
                        </div>
                    </div>
                    <label>Application</label>
                    <textarea rows="5" cols="50" name="Application" placeholder="Write your application"></textarea><br>
                    <center><input class="btn btn-default" type="submit" name="submit" value="Send"></center>
                    <!--<button type="Submit">SEND</button>-->
                </form>
            </div>

            <?php

            if(isset($_POST['submit']))
            {
               mysqli_query($db,"INSERT into `form` VALUES ('$_POST[Name]','$_POST[Date]','$_POST[Subject]','$_POST[Application]', '$_POST[approval_status]');");

            }
            ?>

            <div class="application-right">
                <h3>Contact Us</h3>
                <table>
                    <tr>
                        <td>Email:</td>
                        <td>faheem@giki.edu.pk </td><br>
                        <td>Extension:</td>
                        <td>2205</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>s.hussain@giki.edu.pk </td><br>
                        <td>Extension:</td>
                        <td>2312</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>shahid.farooq@giki.edu.pk </td>
                        <td>Extension: </td>
                        <td>2720</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</body>
</html>