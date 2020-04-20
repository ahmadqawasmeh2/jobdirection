<?php
if(session_id() == '') {
    session_start();
}
if(!isset($_SESSION['user_id']))
{
    // not logged in
    header('Location: index.php');
    exit();
}
?>