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
    $body = " Hi, $username. Forgot your password? Don't worry!! Use the link to reset your password.
    http://localhost/web/reset.php?token=$token 
    
    Sincerely: Team Mega Mall, Majortila, Sylhet.
   ";


    $sender_email = "From: apurbodebnath50@gmail.com";
    if(mail($email,$subject,$body, $sender_email))
    {
      $_SESSION['msg']= "Kindly check your mail to reset your password!!";
          // echo "<script>alert('Kindly check your mail to reset your password!!')</script>";
      // header('location:login.php');
      echo "<script>location.href='login.php'</script>";

    }
  
    
  }
  else{
    echo "<script>alert('No email found!!')</script>";

  }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega Mall E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awsome -->

    <script src="https://kit.fontawesome.com/2fb599ceee.js" crossorigin="anonymous"></script>
    <!--CSS style-->

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="signin.html">
    <link rel="stylesheet" href="index.html">
    <link rel="stylesheet" href="css/all.min.css">

</head>

<body>







    <form class="container w-50 form-design" method="post">
        <h2 class="text-center mb-5 mt-3">Reset Password</h2>
        <div class="mb-3 d-flex">
            <i class="fa-solid fa-2x fa-envelope mt-1 m-1"></i>
            <input type="email" placeholder="Enter your email" name="email" class="form-control" id="iemail"
                aria-describedby="emailHelp">
            <span id="errorInEmail"> </span>
        </div>


        <div style="display:flex">


            <!-- <button type="submit" class="btn btn-primary w-50" name="reset_pass_mail"  
             <a style="text-decoration:none; color:white;font-weight:600" href="login.php">Cancel</a></button> -->

            <button type="submit" name="submit" class="btn btn-primary mx-2 w-50">
                <a style="text-decoration:none; color:white;font-weight:600">Send Mail</a></button>

            <button type="submit" name="forget-pass" class="btn btn-danger mx-2 w-50">
                <a style="text-decoration:none; color:white;font-weight:600" href="login.php">Cancel</a></button>

        </div>
        <div class=" d-flex">
            <p>Not have an account?</p>
            <p style="margin-left: 5px;"><a href="register.php"> Sign-up here</a> </p>
        </div>
    </form>







    <!-- <div style="margin-bottom: 150px;" class="container ">
  <div class="row col-md-12 col-sm-12 col-1">
    <div>




        <form  class="w-50 form-design"  action="#" method="post" onsubmit="return logformvalidation()"  >
            <h1 style="margin-left:220px; margin-bottom: 50px;">Sign In</h1>
            <div class="mb-3">
              <input type="email" placeholder="Enter your email"  class="form-control" id="logInemail"  aria-describedby="emailHelp"> <span id="errorInLogInEmail"> </span>
            </div>

            <div class="mb-3">
              <input type="password"  placeholder="Enter your password"  class="form-control" id="logpass"><span id="errorInPass"> </span>
            </div>
           
            <button style="margin-left: 0px; margin-top: 20px;" type="submit" class="btn btn-success w-100">Submit</button>
          <div class=" d-flex">
            <p>Not registered?</p> 
            <p style="margin-left: 5px;" ><a href="signup.html"> Sign-up here</a> </p>
          </div>
          </form>
    </div>
  </div> -->


    </div>









    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="login_validation.js"></script>
</body>

</html>