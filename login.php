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
</head>

<body>


    <form class="container w-50 form-design" action="loginAction.php" method="post" onsubmit="return logformvalidation()" >
        <h2 class="text-center mb-5 mt-3">Sign in here</h2>
        <div class="mb-3">
          <input type="text" class="form-control" name="l_name" placeholder="Enter your name" class="form-control" id="logInemail"  aria-describedby="emailHelp"> <span id="errorInLogInEmail"> </span>
        </div>
        <div class="mb-3">
          <input type="password"  class="form-control" name="l_pass" placeholder="Enter your password" class="form-control" id="logpass"><span id="errorInPass"> </span>
        </div>

        <div style="display:flex">

     
     <button type="submit" class="btn btn-success w-50" name="login">Sign In</button>
        <button type="submit" name= "google-dsign-up" class="btn btn-danger mx-2 w-50">Forget Password?</button>

     </div>
        <div class=" d-flex">
            <p>New?</p> 
            <p style="margin-left: 5px;" ><a href="register.php"> Sign-up here</a> </p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <script src="login_validation.js"></script>
  </body>
</html>