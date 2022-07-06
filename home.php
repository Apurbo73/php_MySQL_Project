<?php
session_start();

if(isset($_SESSION['name']))
{
    echo "<h2> Hello" . $_SESSION['name'];
}

else {
    echo "<script> alert('Invalid user')</script>";
}







?>
