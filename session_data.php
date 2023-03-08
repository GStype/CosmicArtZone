<?php

session_start();


$session_is_logged = isset($_SESSION['session_logged']);
if($session_is_logged)
{
    $session_user_id = $_SESSION['session_id'];
    
    $session_is_admin = $_SESSION['session_is_admin'] ;
    $session_is_pending = $_SESSION['session_is_pending'];
    
}


?>

