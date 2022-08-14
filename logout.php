<?php

 session_start();
 session_unset();
 session_destroy();
 setcookie('usercookie', '', time()-86400); //deleting cookies from just now time to 1 day
     setcookie('passwordcookie',  '', time()-86400);  //deleting ting cookies from just now time to 1 day
 echo " <script> location.href='login.php' </script>";




?>
