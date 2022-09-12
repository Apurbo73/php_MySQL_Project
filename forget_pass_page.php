<?php

include 'config.php';
if(isset($_POST['submit']))

{

  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $emailQuery = "SELECT * FROM `amigosdb2` WHERE email='$email' ";
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
    
    Sincerely: Team Amigos Outlet, Majortila, Sylhet.
   ";


    $sender_email = "From: apurbodebnath50@gmail.com";
    if(mail($email,$subject,$body, $sender_email))
    {
      // $_SESSION['msg']= "Kindly check your mail to reset your password!!";
      echo "<script>alert('Kindly check your mail to reset your password!!')</script>";
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
    <style>
    body {
        font-family: "Poppins", sans-serif;
    }



    /* Assign full width inputs*/
    input[type=text],
    input[type=email],
    input[type=password] {
        width: 100%;
        padding: 12px 40px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for the buttons*/
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    /* Set a hover effect for the button*/
    button:hover {
        opacity: 0.8;
    }

    /* Set extra style for the cancel button*/
    .container {
        padding: 16px;
    }

    .fontuser {
        position: relative;
    }

    .fontuser i {
        position: absolute;
        left: 10px;
        top: 30px;
        color: gray;

    }

    .fontpassword {
        position: relative;
    }

    .fontpassword i {
        position: absolute;
        left: 15px;
        top: 30px;
        color: gray;
    }
    </style>
</head>

<body>







    <form class="container w-50 form-design" method="post">
        <h2 class="text-center text-info mb-5 mt-3">Reset Password</h2>
        <!-- <div class="mb-3 d-flex fontuser">
            <i class="fa-solid fa-lg fa-envelope"></i>
            <input type="email" placeholder="Enter your email" name="email" class="form-control" id="iemail"
                aria-describedby="emailHelp">
            <span id="errorInEmail"> </span>
        </div> -->
        <div class="fontuser">
            <input type="email" placeholder="Enter your email" class="form-control" name="email" id="iemail"
                aria-describedby="emailHelp">
            <span id="errorInEmail"></span></td> <i class="fa-solid fa-lg fa-envelope "></i>

        </div>




        <div style="display:flex">


            <!-- <button type="submit" class="btn btn-primary w-50" name="reset_pass_mail"  
             <a style="text-decoration:none; color:white;font-weight:600" href="login.php">Cancel</a></button> -->

            <button style="background-color:rgb(255, 161, 70);" type="submit" name="submit" class="btn mx-2 w-50">
                <a style="text-decoration:none; color:white;font-weight:600">Send Mail</a></button>

            <button style="background-color:rgb(0, 169, 157)" type="submit" name="forget-pass" class="btn mx-2 w-50">
                <a style="text-decoration:none; color:white;font-weight:600" href="login.php">Cancel</a></button>

        </div>
        <div class=" d-flex">
            <p>Not have an account?</p>
            <p style="margin-left: 5px;"><a href="register.php"> Sign-up here</a> </p>
        </div>
    </form>



    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="login_validation.js"></script>
</body>

</html>