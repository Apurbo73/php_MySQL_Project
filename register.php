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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">


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
    <form style="margin-top:50px" class="container w-100 text-center " action="insert.php" method="post"
        onsubmit="return formvalidation()">
        <div class="d-flex">

            <div style="background-color:rgb(2, 75, 104)" class="w-50  text-white d-none d-sm-block d-md-block rounded">
                <h2 style="margin-top:50px;font-weight:700;font-size:40px;" class="text-center">Welcome!!</h2>
                <h4 class="p-3">To experience the best online shop near, register here</h4>
                <img style="width:210px;height:200px" src="images/cart.png" alt="">
                <h3 style="margin-top:50px;font-weight:600">Team Amigos Outlet</h3>
            </div>


            <div class="container w-50">
                <h2 style="font-weight:700" class="text-center mb-5 mt-2 text-info ">Sign Up here</h2>

                <div class="fontuser">
                    <input type="text" placeholder="Enter your name" class="form-control" name="r_name" id="ifname"
                        aria-describedby="emailHelp">
                    <span id="errorInFirstName"></span></td> <i class="fa fa-user fa-lg"></i>
                </div>
                <div class="fontuser">
                    <input type="text" placeholder="Enter your mobile" class="form-control" name="r_mobile" id="imobile"
                        aria-describedby="emailHelp">
                    <span id="errorInMobile"></span></td> <i class="fa-solid fa-lg fa-mobile-retro"></i>

                </div>
                <div class="fontuser">
                    <input type="text" placeholder="Enter your email" class="form-control" name="r_email" id="iemail"
                        aria-describedby="emailHelp">
                    <span id="errorInEmail"></span></td> <i class="fa-solid fa-lg fa-envelope "></i>

                </div>

                <!-- <div class="fontuser">
                        <input type="email" placeholder="Enter your email" name="r_email" class="form-control"
                            id="iemail" aria-describedby="emailHelp">
                        <span id="errorInEmail"> </span> <i class="fa-solid fa-lg fa-envelope "></i>
                    </div> -->





                <div class="fontuser">
                    <input type="password" placeholder="Enter your password" name="r_pass" class="form-control"
                        id="ipass">
                    <span id="errorInPass"> </span> <i class="fa-solid fa-lg fa-lock"></i>
                </div>

                <div class="fontuser">
                    <input type="password" placeholder="Confirm password" class="form-control" name="r_con_pass"
                        id="iCpass">
                    <span id="errorInConfirmPass"> </span>
                    <i class="fa-solid fa-lg fa-lock m-1"></i>

                </div>



                <div style="display:flex;">
                    <button style="background-color:rgb(255, 161, 70)" type="submit" name="register"
                        class="btn  text-white w-50 mx-2">Create
                        Account</button>
                    <button style="background-color:rgb(0, 169, 157)" type="submit" name="google-dsign-up"
                        class="btn  mx-2 w-50"><a style="text-decoration:none;color:white;margin-left:5px"
                            href="google sign up.php">
                            Continue
                            with Google </a><i style="color:white" class="fa-brands fa-google"></i></button>
                </div>
                <div class=" d-flex">
                    <p>Already registered?</p>
                    <p style="margin-left: 10px;"><a style="text-decoration:none" href="login.php">Sign-in here</a>
                    </p>
                </div>
            </div>
        </div>

    </form>

</body>


</html>

















<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="signUp_validation.js"></script>

</body>

</html>