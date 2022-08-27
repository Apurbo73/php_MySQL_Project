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


    <form class="container w-50 form-design" action="insert.php"  method="post" onsubmit="return formvalidation()">
        <div class="mb-3">

            <h2 class="text-center mb-5 mt-2">Sign Up here</h2>

            <div style="display:flex">
                <i class="fa-solid fa-2x fa-user mt-1 m-1"></i>
                <input type="text" placeholder="Enter your name" class="form-control" name="r_name" id="ifname"
                    aria-describedby="emailHelp">
                <span id="errorInFirstName"></span></td>

            </div>
        </div>


        <div class="mb-3 d-flex">
            <i class="fa-solid fa-2x m-2 fa-mobile-retro  mt-1"></i>
            <input type="mobile" placeholder="Enter your mobile number" class="form-control" name="r_mobile"
                id="imobile" aria-describedby="emailHelp"><span id="errorInMobile"> </span>
        </div>

        <div class="mb-3 d-flex">
            <i class="fa-solid fa-2x fa-envelope mt-1 m-1"></i>
            <input type="email" placeholder="Enter your email" name="r_email" class="form-control" id="iemail"
                aria-describedby="emailHelp">
            <span id="errorInEmail"> </span>
        </div>


        <div class="mb-3 d-flex">
            <i class="fa-solid fa-2x fa-lock m-1"></i>
            <input type="password" placeholder="Enter your password" name="r_pass" class="form-control" id="ipass">
            <span id="errorInPass"> </span>
        </div>

        <div class="mb-3 d-flex">
            <i class="fa-solid fa-2x fa-lock m-1"></i>
            <input type="password" placeholder="Confirm password" class="form-control" name="r_con_pass" id="iCpass">
            <span id="errorInConfirmPass"> </span>

        </div>
        <div style="display:flex">
            <button type="submit" name="register" class="btn btn-success w-50 mx-2">Create Account</button>
            <button type="submit" name="google-dsign-up" class="btn btn-danger mx-2 w-50"><a style="text-decoration:none;color:white;margin-left:5px" href="google sign up.php"> Continue with Google </a><i class="fa-brands fa-google"></i></button>
        </div>
        <div class=" d-flex">
            <p>Already registered?</p>
            <p style="margin-left: 10px;"><a href="login.php">Sign-in here</a> </p>
        </div>
    </form>





















    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="signUp_validation.js"></script>

</body>

</html>