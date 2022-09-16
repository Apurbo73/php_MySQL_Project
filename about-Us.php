<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigos Outlet</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amigos Outlet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/2fb599ceee.js" crossorigin="anonymous"></script>
    <!-- swiper cdn -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!--CSS style-->

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="signin.html" />
    <link rel="stylesheet" href="signup.html" />
    <link rel="stylesheet" href="Shopping Cart.html" />
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="register.php">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

    <style>
    .supervisor_container {
        width: 100%;
        height: 800px;
        padding: 0 5%;
        margin-bottom: 2%;
    }

    .supervisor_div {
        margin-left: 20%;
        padding: 2%;
        width: 800px;
        height: 500px;
        display: flex;
    }

    .supervisor_picture img {
        width: 400px;
        height: 600px;
    }

    .about_supervisor {

        height: 50%;
        margin: 3%;
        margin-top: 25%;
        align-items: center;
        justify-content: center;

    }

    .second_container {
        display: flex;
        flex-direction: row;
    }

    .second_section {
        display: flex;
        margin: 2%;
        padding: 0% 2%;
    }

    .person_div {
        width: 30%;
    }

    .card_img {
        margin-left: 9%;
    }

    .card_img img {
        border-radius: 10%;
    }
    </style>

</head>

<body>
    <header>
        <section class=" nav-design">
            <div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                    <div class="container">
                        <a class="navbar-brand" href="#"> <img src="images/logo3.png" alt="" width="" height=""
                                class="d-inline-block align-text-top" /> </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation"> <span
                                class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                                <li class="nav-item"> <a class="nav-link active" aria-current="page"
                                        href="index.php">Home</a>
                                </li>







                                <li class="nav-item"> <a class="nav-link" href="register.php"><span
                                            style="font-weight:700;color:black">Sign Up</span></a> </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
    </header>
    <main>
        <div class="first-half">
            <section class="supervisor_container">
                <h1>Supervisor</h1>
                <hr>
                <div class="supervisor_div">
                    <div class="supervisor_picture">
                        <img src="images/sir-1.jpg" alt="">
                    </div>
                    <div class="about_supervisor">
                        <h1>Arifuzzaman Soukin</h1>
                        <p>Lecturer, <br>
                            Department of Computer Science and Engineering <br>
                            Leading University, Sylhet.</p>
                    </div>
                </div>
            </section>
        </div>


       

    </main>
    <div class="container">
        <div class="card-group ">

        <div class="">
                <div class="card-body">
                <div class="card_img">
                        <img style="height:350px; width:350px;margin-bottom:10px" src="images/group_pic.jpg" alt="">
                    </div>
                    <div class="card_content text-center">
                        <h5>Team Amigos</h5>
                        <p>Developer Team of Amigos Outlet</p>
                        <p>Majortila, Sylhet</p>
                        <p>Mobile: 01774573076</p>
                    </div>
                </div>
               
            </div>






            <div class="">
                <div class="card-body text-center">
                <div class="card_img">
                        <img style="height:350px; width:300px" src="images/my.jpg" alt="">
                    </div>
                    <div class="">
                        <h5>Nayebul Jannath Chowdhury</h5>
                        <p>Department of Computer Science & Engineering</p>
                        <p>Leading University, Sylhet.</p>
                        <span class="product_price">ID: 1912020067</span>
                    </div>
                </div>
               
            </div>
       
            <div class="">
                <div class="card-body text-center">
                     <div class="card_img">
                        <img style="height:350px; width:300px" src="images/apurbo.jpg" alt="">
                    </div>
                    <div class="">
                        <h5>Apurbo Deb Nath</h5>
                        <p>Department of Computer Science & Engineering</p>
                        <p>Leading University, Sylhet.</p>

                        <span class="product_price">ID: 1912020073</span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!--footer section-->
    <!--Outlets-showroom section done with off canvas bottom-->
    <div class="">
        <div class="row">
            <footer class="mt-5 text-center">
                <!--Outlets-showroom section done with off canvas bottom-->
                <section class="container d-flex justify-content-center pb-3">
                    <button class="btn btn-primary my-5" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Our Outlets</button>
                    <div class="offcanvas offcanvas-bottom outlets" tabindex="-1" id="offcanvasBottom"
                        aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">
                                <h1><span style="color: rgb(10, 35, 88); font-size: 50px;">Amigos</span> <span
                                        style="color: rgb(109, 8, 58); font-size: 50px;">Outlet</span></h1>
                            </h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small mb-2">
                            <h2>01. Amigos Outlet Majortila</h2>
                            <p>Siddique Plaza, 2nd floor, Majortila, Sylhet-3100.</p>
                            <p>contact: 017xxxxxxxx</p>
                            <br />
                            <h2>02. Amigos Outlet Shibgonj</h2>
                            <p>Shibgonj,Kitchen Market, Sylhet-3100.</p>
                            <p>contact: 017xxxxxxxx</p>
                            <br />
                            <h2>03. Amigos Outlet Mirabazar</h2>
                            <p>Mirabazar, Jotorpur , Sylhet-3100.</p>
                            <p>contact: 017xxxxxxxx</p>
                            <br />
                        </div>
                        <marquee width="100%" direction="right" height="500px"> Thanks for your interest. For
                            order contact through the numbers. Happy shopping. <a
                                style="background-color: rgb(138, 247, 187);" href=""><i style="color: black;"
                                    class="fas fa-shopping-cart"></i></a> </marquee>
                    </div>
                </section>
                <!--Contact Information-->
                <section class="container"> <a style="margin-right: 5px;"
                        href="https://www.instagram.com/apubdofficial/"><i class="fab fa-instagram"></i></a> <a
                        style="margin-right: 5px;" href=""><i class="fab fa-facebook-square"></i></a> <a
                        style="margin-right: 5px;" href=""><i class="fab fa-twitter-square"></i></a> <a
                        style="margin-right: 5px;" href=""><i class="fab fa-github-square"></i></a> <a
                        style="margin-right: 5px;" href="" href=""><i class="fab fa-youtube"></i></a> </section>
                <div class="d-flex justify-content-center"> <a href="">Conditions</a> <a href="">Privacy
                        Notice</a> <a href="">Interest-Based Ads</a> <a href="">©2022 Amigos Outlet</a> </div>
            </footer>
        </div>
    </div>


</body>

</html>