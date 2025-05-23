<?php 

if(isset($_SERVER['message']))
{
    $printMessage = $_SESSION['message'];
    $_SESSION['message'] = '';
}


?>