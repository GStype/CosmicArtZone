<?php

include_once "db_config.php";

if(isset($_POST['user_id']))
{
    $user_id = $_POST['user_id'];
    mysqli_select_db($conn, DB_NAME);
   $sql = "UPDATE users SET reg_pending = 0 WHERE id = '$user_id'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));


}