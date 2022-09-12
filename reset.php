<?php
session_start();
include 'config.php';
if (isset($_POST['submit']))
{
    if(isset($_GET['token']))
    {

        $token = $_GET['token'];

    
  $newPassword= mysqli_real_escape_string($conn,$_POST['pass']);
  $con_pass= mysqli_real_escape_string($conn,$_POST['con_pass']);
 

//   $updatequery = "update fresh_table set pass= '$newPassword' where token ='$token";
  if($newPassword === $con_pass)
  {
    $updatequery = "update amigosdb2 set pass= '$newPassword' where token ='$token' ";
  $iquery= mysqli_query($conn,$updatequery);

if($iquery){
    echo "<script>alert('Password updated successfully!!')</script>";
    // header('location:login.php');
    echo "<script>location.href='login.php'</script>";
}


  }
  else
{
    echo "<script>alert('Password and confirm password are not matching !!')</script>";


}

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
        <div class="mb-3">

            <h2 class="text-center mb-5 mt-2 text-info">Reset Your Password</h2>

        </div>

        <div class="mb-3 d-flex fontuser">
            <i class="fa-solid fa-lg fa-lock "></i>

            <input type="password" placeholder="Enter new password" name="pass" class="form-control" id="ipass">
            <span id="errorInPass"> </span>
        </div>


        <div class="mb-3 d-flex fontuser">
            <i class="fa-solid fa-lg fa-lock"></i>
            <input type="password" placeholder="Confirm new password" class="form-control" name="con_pass" id="iCpass">
            <span id="errorInConfirmPass"> </span>

        </div>
        <div>

            <button style="background-color:rgb(255, 161, 70);" type="submit" name="submit" class="btn w-100 mb-1"><a
                    style="text-decoration:none; color:white;font-weight:600">Update Password</a> </button>

            <button style="background-color:rgb(0, 169, 157)" type="submit" name="forget-pass" class="btn  w-100">
                <a style="text-decoration:none; color:white;font-weight:600" href="login.php">Cancel</a></button>
        </div>

    </form>





















    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="signUp_validation.js"></script>

</body>

</html>