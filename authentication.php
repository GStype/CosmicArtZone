<?php

require_once "db_config.php"; 

session_start();

mysqli_select_db($conn, DB_NAME);
$username = mysqli_real_escape_string($conn, $_POST['username_field']);
$password = mysqli_real_escape_string($conn, $_POST['password_field']);

$checkQuery = "select * from users where username = '$username' && password = '$password'";

$queryResult = mysqli_query($conn, $checkQuery);

$totalRows = mysqli_num_rows($queryResult);
if ($totalRows == 1) 
{
    $findIDQuery = "select * from users where username = '$username'";

    $queryResult = mysqli_query($conn, $findIDQuery);

    while($row = mysqli_fetch_array($queryResult))
    {
        $_SESSION['session_username'] = $row['username'];
        $_SESSION['session_id'] = $row['id'];
        $_SESSION['session_logged'] = True;
        $_SESSION['session_is_pending'] = $row['reg_pending']; 
        $_SESSION['session_is_admin'] = $row['is_admin']; 
    }


    header("location: index.php");

}
else
{

    header("location: login.php?username_param=$username"); 
}


?>