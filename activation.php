<?php
session_start();
include 'config.php';

{
    if(isset($_GET['token']))
    {

        $token = $_GET['token'];
        $updatequery= " update `amigosdb2` set status='active' where token='$token'";
        $query= mysqli_query($conn,$updatequery);
   
        echo "<script>location.href='login.php'</script>";
    }
    
    else
    {
        echo "<script>alert('Kindly check your mail to activate your account!!')</script>";        header('location:login.php');
    }
    

}

    
?>