<!DOCTYPE html>
<html lang="en">

<head>
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

</head>
<style>
body {
    font-family: "Poppins", sans-serif;
}
</style>

<body>
    <header>
        <section class="container nav-design">
            <div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                    <div class="container">
                        <a class="navbar-brand" href="#"> <img src="images/logo hot.png" alt="" width="" height=""
                                class="d-inline-block align-text-top" /> </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation"> <span
                                class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li>
                                    <button class="btn  p-1 m-1 rounded cart_btn" type="submit">Search</button>
                                    <input type="text" class=" p-1  rounded" placeholder="what are you looking for?..">

                                </li>
                                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>


                                <div class="dropdown ">
                                    <a class=" nav-link  dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span style="font-weight:700;color:black"> Categories
                                        </span> </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li class="nav-item"> <a class="nav-link" href="#Gadget">Gadget</a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="#bags">Bags</a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="#shoes">Shoes</a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="#cloth">Cloths</a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="#toys">Toys</a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="#food">Foods</a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="#students"> Offers</a> </li>
                                    </ul>
                                </div>

                                <li>
                                    <button class="btn nav-link " type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"> <span
                                            style="font-weight:700;color:black">My Cart
                                        </span></button>

                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                        aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 id="offcanvasRightLabel">Check Your Cart and pay the bill</h5>
                                            <button type="button" class="btn-close text-reset"
                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            Nothing added to your cart.
                                            KIndly Sign Up first.
                                        </div>
                                    </div>

                                </li>

                                <li class="nav-item"> <a class="nav-link" href="#reviews"><span
                                            style="font-weight:700;color:black">Reviews</span></a> </li>

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

        <div>


            <section>
                <!-- Swiper -->
                <div class="swiper_container">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="image/tips/privacy-2.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="image/tips/paymnet-2.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="image/tips/feedback-4.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="image/home-office-569153_1920.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="image/girl-476977_1920.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="image/young-woman-4996096_1920.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="image/iphone-545772_1920.jpg" />
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="text-center ">
                        <h1 class="mb-5 d-inline-block fs-4">Discover <span class="text-danger">Amigos</span> brand new
                            product</h1>
                    </div>

                </div>





            </section>





            <section class="container">

                <!--text sliding-->

                <marquee width="100%" direction="left" height="100px">
                    <p style="font-size: 20px;">Welcome to <span style="color: orange;">Amigos</span> <span
                            style="color: rgb(11, 11, 141);">Outlet.</span>Thannks for visiting. Hope you will enjoy.
                    </p>
                </marquee>
                <!--Best selling products-->

            </section>







  <!--Categories -->
  <section class=" mt-5">
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                    <a href="#shoes">
                        <div class="col">
                            <div
                                class="d-flex justify-content-between align-items-center p-3 border bg-light rounded-pill categories_div">
                                <h1 class="fs-5">Shoe</h1>
                                <img src="image/icons8-pair-of-sneakers-96.png" alt="">
                            </div>
                        </div>
                    </a>
                    <div class="col">
                        <a href="#bags">
                            <div
                                class="d-flex justify-content-between align-items-center p-3 border bg-light rounded-pill categories_div">
                                <h1 class="fs-5">Bag</h1>
                                <img src="image/icons8-backpack-96.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#Gadget">
                            <div
                                class="d-flex justify-content-between align-items-center p-3 border bg-light rounded-pill categories_div">
                                <h1 class="fs-5">Mobile</h1>
                                <img src="image/mb.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#laptop">
                            <div
                                class="d-flex justify-content-between align-items-center p-3 border bg-light rounded-pill categories_div">
                                <h1 class="fs-5">Laptop</h1>
                                <img src="image/icons8-laptop-96.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#food">
                            <div
                                class="d-flex justify-content-between align-items-center p-3 border bg-light rounded-pill categories_div">
                                <h1 class="fs-5">Food</h1>
                                <img src="image/icons8-kawaii-french-fries-96.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#cloth">
                            <div
                                class="d-flex justify-content-between align-items-center p-3 border bg-light rounded-pill categories_div">
                                <h1 class="fs-5">Cloth</h1>
                                <img src="image/icons8-clothes-line-96.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#toys">
                            <div
                                class="d-flex justify-content-between align-items-center p-3 border bg-light rounded-pill categories_div">
                                <h1 class="fs-5">Toy</h1>
                                <img src="image/icons8-playing-children-96.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#upcoming">
                            <div
                                class="d-flex justify-content-between align-items-center p-3 border bg-light rounded-pill categories_div">
                                <h1 class="fs-5">Upcoming</h1>
                                <img src="image/icons8-add-product-96.png" alt="">
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!--Categories End-->

            <!--Hot Gadget section-->
            <!--Devices-->
            <!--Smartphones-->
            <section class="container mt-5" id="Gadget">
                <h2 style="text-align: center; color: rgb(116, 14, 35); margin-bottom: 50px; margin-bottom: 50px;">
                    Smartphones</h2>
                <div class="row row-cols-1 card-size row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-60 products border-0 shadow-lg"> <img src="images/phone-1.png"
                                class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h4 class="card-title text-center">Xiaomi Mi Note 2</h4>
                                <p class="card-text text-center"> Xiaomi Mi Note 2.. 11,980 Tk </p>
                            </div>
                            <div class="m-3">
                                <div class="container">

                                    <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                        class="button btn btn-success w-50 "><a href="register.php"><i
                                                class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                            style="text-decoration:none;color:white;font-weight:700"
                                            href="register.php">Buy
                                            Now</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-60 products border-0 shadow-lg"> <img src="images/phone-2.png"
                                class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h4 class="card-title text-center">Iphone 13 Pro</h4>
                                <p class="card-text text-center"> The ultimate iPhone. 120000 Tk </p>
                            </div>
                            <div class="m-3">
                                <div class="container">

                                    <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                        class="button btn btn-success w-50 "><a href="register.php"><i
                                                class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                            style="text-decoration:none;color:white;font-weight:700"
                                            href="register.php">Buy
                                            Now</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-60 products border-0 shadow-lg"> <img src="images/phone-3.png"
                                class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h4 class="card-title text-center">Samsung Note 2</h4>
                                <p class="card-text text-center">45000 Tk</p>
                            </div>
                            <div class="m-3">
                                <div class="container">
                                    <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                        class="button btn btn-success w-50 "><a href="register.php"><i
                                                class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                            style="text-decoration:none;color:white;font-weight:700"
                                            href="register.php">Buy
                                            Now</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>

        <!--Laptops-->
        <section id="laptop" class="container products mt-5" id="Gadget">
            <h2 style="text-align: center; color: rgb(116, 14, 35); margin-bottom: 50px;">Laptops</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/product-2.png"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title text-center">Lenovo ideapad 330</h4>
                            <p class="card-text text-center">45000 Tk</p>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/product-3.png"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title text-center">Dell Inspiration 15</h4>
                            <p class="card-text text-center">35500 Tk</p>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <!-- <button id="Dell-plus" class="button btn btn-success">Add to Cart</button>
                                <input id="Dell-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <button id="Dell-minus" style="margin-left: 0px;"
                                    class="button btn btn-danger">Remove</button> -->
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/laptop.png"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title text-center">Apple Mackbook Pro</h4>
                            <p class="card-text text-center">220000 Tk</p>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Shoes Corner-->
        <section class="container products mt-5" id="shoes">
            <h2 style="text-align: center; color: rgb(116, 14, 35); margin-bottom: 50px;">Shoes Corner</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/shoe-1.png"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title text-center">Sply 350</h4>
                            <p class="card-text text-center">8000 Tk</p>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/shoe-2.png"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title text-center">Nike-360</h4>
                            <p class="card-text text-center">7500 Tk</p>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/shoe-3.png"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title text-center">Red Airmax</h4>
                            <p class="card-text text-center">12000 Tk</p>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Bag Corner-->
        <section class="container products my-5" id="bags">
            <h2 style="text-align: center; color: rgb(116, 14, 35); margin-bottom: 50px;">Bag Corner</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/bag-1.png" class="card-img-top"
                            alt="..." />
                        <div class="card-body">
                            <h4 class="card-title text-center">Red OGIO</h4>
                            <h6 class="card-text text-center">1250 Tk.</h6>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/bag-2.png" class="card-img-top"
                            alt="..." />
                        <div class="card-body">
                            <h5 class="card-title text-center">Blue Burton</h5>
                            <h6 class="card-text text-center">1250 Tk.</h6>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/bag-3.png" class="card-img-top"
                            alt="..." />
                        <div class="card-body">
                            <h5 class="card-title text-center">Simple Black</h5>
                            <h6 class="card-text text-center">1250 Tk.</h6>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Food corner-->
        <section class="container products my-5" id="food">
            <h2 style="text-align: center; color: rgb(116, 14, 35); margin-bottom: 50px;">Food Corner</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/burger.jpg"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title text-center">Yummy Burger</h5>
                            <h6 class="card-text text-center">350 Tk.</h6>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/combo.jpg" class="card-img-top"
                            alt="..." />
                        <div class="card-body">
                            <h5 class="card-title text-center">Combo Platter</h5>
                            <h6 class="card-text text-center">650 Tk.</h6>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/salad.jpg" class="card-img-top"
                            alt="..." />
                        <div class="card-body">
                            <h5 class="card-title text-center">Fresh Salad</h5>
                            <h6 class="card-text text-center">650 Tk.</h6>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--cloth section-->
        <section class="container my-5" id="cloth">
            <h2 style="text-align: center; color: rgb(116, 14, 35); margin-bottom: 50px;">Cloth section</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-60 border-0 shadow-lg"> <img src="images/polo.jpg" class="card-img-top"
                            alt="..." />
                        <div class="card-body">
                            <h5 class="card-title text-center">Blue Polo</h5>
                            <h6 class="card-text text-center">550 Tk.</h6>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/mypolo.jpg"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title text-center">Multi USPA</h5>
                            <h6 class="card-text text-center">450 Tk.</h6>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/polo.jpg" class="card-img-top"
                            alt="..." />
                        <div class="card-body">
                            <h5 class="card-title text-center">Blue Polo</h5>
                            <h6 class="card-text text-center">550 Tk.</h6>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--toys-->
        <section id="toys" class="container products my-5" id="toys">
            <h2 style="text-align: center; color: rgb(116, 14, 35); margin-bottom: 50px;">Toys Corner</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/toy.jpg" class="card-img-top"
                            alt="..." />
                        <div class="card-body">
                            <h5 class="card-title text-center">Toy Whole Sale</h5>
                            <h6 class="card-text text-center">1050 Tk.</h6>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/toy1.jpg" class="card-img-top"
                            alt="..." />
                        <div class="card-body">
                            <h5 class="card-title text-center">Spider Man</h5>
                            <h6 class="card-text text-center">550 Tk.</h6>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lgg"> <img src="images/toy3.jpg" class="card-img-top"
                            alt="..." />
                        <div class="card-body">
                            <h5 class="card-title text-center">Construction Truck</h5>
                            <h6 class="card-text text-center">1550 Tk.</h6>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <button id="Iphone-minus" style="margin-left: 0px;margin-left:75px"
                                    class="button btn btn-success w-50 "><a href="register.php"><i
                                            class="fa-solid fa-cart-shopping text-white"></i> </a> <a
                                        style="text-decoration:none;color:white;font-weight:700" href="register.php">Buy
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>












        <!--Display inserted producted-->


        <div id="upcoming"  class="container">
            <h2 class="text-center">Upcoming products</h2>
            <div class="  text-center " style="width: 18rem;">
                <div class="card-body d-flex ">
                    <?php
   include 'crud-config.php';


   $alldata = mysqli_query($conn, " SELECT * FROM `insert-products` ");
   while( $row = mysqli_fetch_array($alldata))
   {
	echo
	"
	
      <div> 
	  <img src= '$row[image]' alt= 'image' width ='250px'>
      <h2> $row[name] </h2> <br>
      <h2> $row[price] </h2> <br> 
        </div>
       
      

	

      ";

   }

     ?>






                </div>
            </div>
        </div>
        </div>




        <!--footer section-->
        <!--Outlets-showroom section done with off canvas bottom-->
        <div class="container">
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
                                    <h1><span style="color: rgb(10, 35, 88); font-size: 50px;">Mega</span> <span
                                            style="color: rgb(109, 8, 58); font-size: 50px;">Mall</span></h1>
                                </h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small mb-2">
                                <h2>01. Mega Mall Majortila</h2>
                                <p>Siddique Plaza, 2nd floor, Majortila, Sylhet-3100.</p>
                                <p>contact: 017xxxxxxxx</p>
                                <br />
                                <h2>02. Mega Mall Shibgonj</h2>
                                <p>Shibgonj,Kitchen Market, Sylhet-3100.</p>
                                <p>contact: 017xxxxxxxx</p>
                                <br />
                                <h2>03. Mega Mall Mirabazar</h2>
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
                            Notice</a> <a href="">Interest-Based Ads</a> <a href="">©2022 Mega-Mall.com Apurbo Deb
                            Nath</a> </div>
                </footer>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

    </script>


    <script src="javascript.js"></script>
    <script src="app.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 20,
            stretch: 0,
            depth: 200,
            modifier: 1,
            slideShadows: true,
        },
        loop: true,
        autoplay: {
            delay: 700,
            disableOnInteraction: false,
        },
    });
    </script>
</body>

</html>