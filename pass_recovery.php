<!-- 
<!DOCTYPE html>
<html>
<head>
<style> 
div {
  width: 100px;
  height: 100px;
  background-color: red;
  position: relative;
  animation: myfirst 5s linear 2s infinite alternate;
}

@keyframes myfirst {
  0%   {background-color:red; left:0px; top:0px;}
  25%  {background-color:yellow; left:200px; top:0px;}
  50%  {background-color:blue; left:200px; top:200px;}
  75%  {background-color:green; left:0px; top:200px;}
  100% {background-color:red; left:0px; top:0px;}
}
</style>
</head>
<body>


<h2 style="text-align:center">Site Under Construction!!!</h2>
<div></div>

</body>
</html> -->

<?php

include 'config.php';
if(isset($_POST['submit']))

{

  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $emailQuery = "SELECT * FROM `fresh_table` WHERE email='$email' ";
  $query = mysqli_query($conn,$emailQuery);
  $emailCount = mysqli_num_rows($query);
  
  if($emailCount)
  {

    $userdata = mysqli_fetch_array($query);
    $username = $userdata['username'];
    $token = $userdata['token'];
    $subject ="Password Reset";
    $body = "Hi, $username. Click here to reset your password 
    http://localhost/web/reset.php?token=$token ";

    $sender = "From: apurbodebnath50@gmail.com";
    if(mail($email,$subject,$body, $sender))
    {
      $_SESSION['msg']= "Kindly check your mail to reset your password!!!";
      header('location:login.php');
    }
  
    else{
      echo "No email found!!!";
    }
  }
}

?>