<?php
include "connection.php";
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Approve Request</title>
        <link rel = "stylesheet" type = "text/css" href = "bk_style.css">
        <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <body>
        	<div class="box4">

        	<div class = "container">
        		<h3 style="text-align: center; font-size: 25px;">Approve Request</h3>

        		<form class="Approve" action="" method="post">
        			<label>Form ID</label>
        <input class="form-control" type="number" name="form_id" placeholder="Form Id" required=""><br>
        <label>Status</label>
        <input class="form-control" type="text" name="approval_status" placeholder="Approve or Reject" required=""><br>

        <button class="btn btn-default" type="submit" name="submit">Update</button>

        </div>
    </form>
  
  
</div>

<?php
  if(isset($_POST['submit']))
  {
    mysqli_query($db,"UPDATE  `form` SET  approval_status='$_POST[approval_status]'  WHERE Form_id='$_POST[form_id]';");

    ?>
      <script type="text/javascript">
        alert("Approved successfully.");
        window.location="Application.php"
      </script>
    <?php
  }
?>
</body>
</html>
