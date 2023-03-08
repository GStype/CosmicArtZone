
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html>
 <head>
  <title>Hello... Welcome</title>

  <meta charset="utf-8"> 
  
  
  <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<body style="background-color:powderblue;">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
	 <link rel="stylesheet" href="Dstyles.css">

  </head>
  <?php include('menubar.html'); ?>
<body>
<?php

    require_once "db_config.php";
    require_once "session_data.php";

    if(!$session_is_logged)
    {
        echo "You must be logged in to continue";
        die();
    }

    if($session_is_pending)
    {
        echo "You registration is pending please check again later";
        die();
    }

    if($session_is_admin)
    {      
      

      echo "Welcome admin";
      $checkQuery = "select * from users where reg_pending = 1"; 

      $queryResult = mysqli_query($conn, $checkQuery);


      while($row = mysqli_fetch_array($queryResult))
      {
        echo "<p>" . $row['username'] ;
        echo "<button onclick = \"ApproveUser(" . $row['id'] . ")\">" . "Approve</button>";
        echo "</p>";
      }

    }
    else
    {
      echo "Welcome user";
    }

    



?>

<script>

function ApproveUser(userID)
{
        let XHR = new XMLHttpRequest();
        XHR.addEventListener('load', function(event) {
        window.location.reload();
        });
        let formData = new FormData();

        formData.append("user_id", userID);

        XHR.open('POST', 'approve_user.php');

        XHR.send(formData); 
}
</script>

</body>
</html>
