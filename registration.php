<?php
   
require_once "db_config.php"; 



mysqli_select_db($conn, DB_NAME);
$username = mysqli_real_escape_string($conn, $_POST['username_field']);
$password = mysqli_real_escape_string($conn, $_POST['password_field']);
$re_password = mysqli_real_escape_string($conn, $_POST['re_password_field']);

$email = mysqli_real_escape_string($conn, $_POST['email_field']);
$department = mysqli_real_escape_string($conn, $_POST['department_field']);
$checkQuery = "select * from users where username = '$username'";

$queryResult = mysqli_query($conn, $checkQuery);

$totalRows = mysqli_num_rows($queryResult);

if ($totalRows == 1)
{
    echo "<script type='text/javascript'>alert('This username already exists.'); window.location.href='register.php'</script>";
}
else if ($password != $re_password)
{
    echo "<script type='text/javascript'>alert('The password you have entered do not match'); window.location.href='register.php'</script>";

}
else if (strlen($username) < 4 || strlen($username) > 15)
{
    echo "<script type='text/javascript'>alert('The username length must be between 4 and 15 characters'); window.location.href='register.php'</script>";


}
else 
{
    $insertQuery = "insert into users(username, password, department, email) values ('$username', '$password', '$department', '$email')";
    $queryResult = mysqli_query($conn, $insertQuery);
    header("location: login.php?reg_success=$username"); 
}




?>