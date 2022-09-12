
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amigos Outlet</title>
    <!-- swiper cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/2fb599ceee.js" crossorigin="anonymous"></script>
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
    /* background-color: #d8d8d8; */
}
</style>

<body>
    <header>
        <section class=" nav-design">
            <div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                    <div class="container">
                        <a class="navbar-brand logo1" href="#"> <img src="images/logo3.png" alt="" width="" height=""
                                class="d-inline-block align-text-top" /> </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation"> <span
                                class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li>
                                    <button class="btn cart_btn p-1 m-1 rounded" type="submit">Search</button>
                                    <input type="text" class="p-1  rounded" placeholder="Search">
                                </li>
                                <li class="nav-item "> <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <div class="dropdown">
                                    <a class="btn nav-link   dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
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
                                    <button id="myCartBtn" class="cart_btn " type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">My Cart</button>

                                    <div class="offcanvas offcanvas-end w-75 text-dark" tabindex="-1"
                                        id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">

                                            <button type="button" class="btn-close text-reset"
                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <div id="Shopping_Cart" class="container mt-5">
                                                <div class="card text-center">
                                                    <div class="card-header">
                                                        <h1>Your Cart</h1>
                                                    </div>
                                                    <div class="card-body"> <img style="height: 300px;"
                                                            src="images/buy.png" alt="" />
                                                        <div class="container">
                                                            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                                                <div class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <!--Shopping Cart for Xiomi starts-->
                                                                        <div id="Xiomi-body" class=" text-center">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                01.Xiomi Mi Note 2</h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="xiomi-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="xiomi-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                        <!--Shopping Cart for Xiomi ends-->
                                                                    </div>
                                                                </div> <br>
                                                                <div id="Iphone-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <!--Shopping Cart for Iphone starts-->
                                                                        <div class="">
                                                                            <h5 style="margin-left:0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                02.Iphone 13 Pro</h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Iphone-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="iphone-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                        <!--Shopping Cart for Iphone ends-->
                                                                    </div>
                                                                </div>
                                                                <div id="Samsung-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <!--Shopping Cart for Samsung starts-->
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center">
                                                                                03.Samsung Note 2
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Samsung-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Samsung-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                        <!--Shopping Cart for Samsung ends-->
                                                                    </div>
                                                                </div>
                                                                <div id="Lenovo-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <!--Shopping Cart for Lenovo starts-->
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center" id="">
                                                                                04.Lenovo
                                                                                ideapad 330
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Lenovo-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Lenovo-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                        <!--Shopping Cart for Lenovo ends-->
                                                                    </div>
                                                                </div>
                                                                <div id="Dell-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <!--Shopping Cart for Dell starts-->
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                05.Dell Inspiration 15
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Dell-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Dell-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                        <!--Shopping Cart for Dell ends-->
                                                                    </div>
                                                                </div>
                                                                <div id="Mac-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <!--Shopping Cart for Mac starts-->
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                06.Apple Mackbook Pro
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Mac-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Mac-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                        <!--Shopping Cart for Mac ends-->
                                                                    </div>
                                                                </div>
                                                                <div id="Sply-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                07.Sply original</h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Sply-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Sply-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="Nike-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                08.Nike-360 Version
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Nike-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Nike-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="Airmax-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                09.Red Airmax Version
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Red-Airmax-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Red-Airmax-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="Simple-red-bag-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                10.Simple Red Bag</h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Red-bag-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Red-bag-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="Blue-bag-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                11.Simple Blue Bag</h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Blue-bag-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Blue-bag-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="black-bag-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                12.Simple Black Bag</h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Black-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Black-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="Burger-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                13.Yummy Burger</h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Burger-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Burger-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="Combo-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                14.Combo Platter</h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Combo-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Combo-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="Fresh-salad-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                15.Fresh Salad
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Salad-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Salad-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="polo-original-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                16.Blue Polo Original</h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Blue-polo-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Blue-polo-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="USPA-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                17.Multi USPA </h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="USPA-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="USPA-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="Blue-polo-new-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                18.Blue Polo New</h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Blue-polo-new-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Blue-polo-new-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                18.Blue Polo New</h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Blue-polo-new-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Blue-polo-new-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="Whole-sale-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                19.Whole Sale</h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Whole-sale-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Whole-sale-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="Spider-body" class="col">
                                                                    <div class="p-3 border bg-light">
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                20.Spider Man</h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Spider-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Spider-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div id="Truck-body" class="p-3 border bg-light">
                                                                        <div class="">
                                                                            <h5 style="margin-left: 0px;"
                                                                                class="card-title text-center"
                                                                                id="XiomiProduct">
                                                                                21.Construction Truck
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;"
                                                                                class="card-text text-center">Amount:
                                                                                <span id="Truck-amount">0</span>
                                                                            </h5>
                                                                            <h5 style="margin-left: 10px;">Total bill:
                                                                                <span id="Truck-bill">0</span>
                                                                                <span>Taka</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col p">
                                                                    <div
                                                                        class="p-3 Total-Payment-bpx-design border bg-light">
                                                                        <h5>Check Your Cart</h5>
                                                                        <h5>Thanks for your patient</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="col p">
                                                                    <div
                                                                        class="p-3 Total-Payment-bpx-design border bg-light">
                                                                        <h5>WE accept</h5>
                                                                        <h5>Bkash, Nogod, Upay, Rocket, Card etc.</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="col p">
                                                                    <div
                                                                        class="p-3 Total-Payment-bpx-design border bg-light">
                                                                        <h5>Total Payment</h5>
                                                                        <h5 id="total-payment">0 <span>Taka</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--Shopping Cart for Truck ends--><a href="#"
                                                                class="btn btn-primary mt-5 mb-5 w-100 p-2">Pay
                                                                your Bill</a>
                                                        </div>
                                                        <div class="card-footer text-muted"> Happy Shopping !!! </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </li>



                                <li class="nav-item"> <a class="nav-link" href="#reviews"><span
                                            style="font-weight:700;color:black">Reviews</span></a> </li>

                                <li class="nav-item"> <a class="nav-link" href="logout.php"> <span
                                            style="font-weight:700;color:black">Log out</span></a> </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
    </header>
    <main>
        <section>
            <!-- Swiper -->
            <div class="swiper_container">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="cover/cover-1.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="image/tips/paymnet-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="cover/cover-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="image/home-office-569153_1920.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="cover/cover-3.jpg" />
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


        <!--text sliding-->
        <marquee width="100%" direction="left" height="100px">
            <p style="font-size: 20px;">Welcome to <span style="color: orange;">Amigos</span> <span
                    style="color: rgb(11, 11, 141);">Outlet.</span>Thanks for visiting. Hope you will enjoy.</p>
        </marquee>

        <!--Tips & Privacy-->
        <section class="m-3 mb-5">
            <div class="overflow-hidden">
                <div class="row gx-3 row-cols-1 row-cols-md-2 g-4 mt-5 my-5 row-cols-lg-4 ">
                    <div class="col">
                        <div class="border tips_privacy">
                            <div class="privacy_img_div_container">
                                <img class="image" src="image/tips/pic-1.jpg" alt="">
                                <div class="middle">
                                    <div class="text text_balck"> Business-to-Business (B2B) Business-to-Consumer (B2C)
                                        Consumer-to-Consumer (C2C).
                                    </div>
                                </div>
                            </div>
                            <div class="tips_trade_content">
                                <div class="d-flex justify-content-between m-3">
                                    <h3 class="text_balck d-flex align-items-center fs-4">Network</h3>
                                    <img src="image/tips/cloud.png" class="privacy_policy_icon">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="border tips_privacy">
                            <div class="privacy_img_div_container">
                                <img class="image" src="image/tips/paymnet-3.jpg" alt="">
                                <div class="middle">
                                    <div class="text text_balck"> By and large, credit cards are easily the most secure
                                        and safe payment method to use when you shop online.
                                    </div>
                                </div>
                            </div>
                            <div class="tips_trade_content">
                                <div class="d-flex justify-content-between m-3">
                                    <h3 class="text_balck d-flex align-items-center fs-4">Payment</h3>
                                    <img src="image/tips/paymnet_icon.png" class="privacy_policy_icon">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="border tips_privacy">
                            <div class="privacy_img_div_container">
                                <img class="image" src="image/tips/privacy-2.jpg" alt="">
                                <div class="middle">
                                    <div class="text text_balck"> It's a safe sound online market place where every
                                        details of any user will be kept encrypted.
                                    </div>
                                </div>
                            </div>
                            <div class="tips_trade_content ">
                                <div class="d-flex justify-content-between m-3">
                                    <h3 class="text_balck d-flex align-items-center fs-4">Privacy</h3>
                                    <img src="image/tips/privacy-icons.png" class="privacy_policy_icon">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="border tips_privacy">
                            <div class="privacy_img_div_container">
                                <img class="image" src="image/tips/feedback-3.jpg" alt="">
                                <div class="middle">
                                    <div class="text text_balck"> We warmly welcome every bit of valuable feedbacks of
                                        our customers and take concerned initiatives.
                                    </div>
                                </div>
                            </div>
                            <div class="tips_trade_content">
                                <div class="d-flex justify-content-between m-3">
                                    <h3 class="text_balck d-flex align-items-center fs-4">Feedback</h3>
                                    <img src="image/tips/feddback_icon.png" class="privacy_policy_icon">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <p style="text-align: justify" class="m-2 fs-6 text ">The government recognizes that e commerce is thriving
                in Bangladesh and, as a result, created this policy to guide and govern the sector. The policy outlines
                development priorities in the IT, electricity and broadband sectors with a view to supporting
                Bangladesh's development and also enabling the country to keep pace with the modern world and we
                responsively follow the guidelines.</p>
        </section>
        <!--Tips & Privacy End-->

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


        <!--Product Section-->
        <!--Shoes Corner-->
        <section class="container products mt-5" id="shoes">
            <h2 class="fs-2 m-5 text-center">Shoes Corner</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/shoe-1.png" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Sply 350</h4>
                                <p class="card-text text-center"> 8000 Tk </p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Sply-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Sply-number" class="text-center myInputdesign" value="0" />
                                    <a id="Sply-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button id="myCartBtn" class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/shoe-2.png" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Nike-360</h4>
                                <p class="card-text text-center"> 7500 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Nike-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Nike-number" class="text-center myInputdesign" value="0" />
                                    <a id="Nike-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/shoe-3.png" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Red Airmax</h4>
                                <p class="card-text text-center">12000 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Red-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Red-number" class="text-center myInputdesign" value="0" />
                                    <a id="Red-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!--Shoes Corner End-->
        <!--Smartphones-->
        <section class="container mt-5" id="Gadget">
            <h2 class="fs-2 m-5 text-center">Smartphones</h2>

            <div class="row row-cols-1 card-size row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/phone-1.png" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Xiaomi Mi Note 2</h4>
                                <p class="card-text text-center"> Xiaomi Mi Note 2.. 11,980 Tk </p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Xiomi-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Xiomi-number" class="text-center myInputdesign" value="0" />
                                    <a id="Xiomi-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/phone-2.png" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Iphone 13 Pro</h4>
                                <p class="card-text text-center"> The ultimate iPhone. 120000 Tk </p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Iphone-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Iphone-number" class="text-center myInputdesign" value="0" />
                                    <a id="Iphone-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/phone-3.png" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Samsung Note 2</h4>
                                <p class="card-text text-center"> 45000 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Samsung-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Samsung-number" class="text-center myInputdesign" value="0" />
                                    <a id="Samsung-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/phone-3.png"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title text-center">Samsung Note 2</h4>
                            <p class="card-text text-center">45000 Tk</p>
                        </div>
                        <div class="">
                            <div class="container">

                                <a id="Samsung-plus" class=" btn "><i style="margin-left:50px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>
                                <input id="Samsung-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="Samsung-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>


                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>



        <!--Laptops-->
        <section class="container products mt-5" id="Gadget">
            <h2 id="laptop" class="fs-2 m-5 text-center">Laptops</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/product-2.png" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Lenovo ideapad 330</h4>
                                <p class="card-text text-center"> 45000 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Lenovo-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Lenovo-number" class="text-center myInputdesign" value="0" />
                                    <a id="Lenovo-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/product-3.png" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Dell Inspiration 15</h4>
                                <p class="card-text text-center"> 35500 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Dell-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Dell-number" class="text-center myInputdesign" value="0" />
                                    <a id="Dell-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/laptop.png" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Apple Mackbook Pro</h4>
                                <p class="card-text text-center"> 220000 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Mac-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Mac-number" class="text-center myInputdesign" value="0" />
                                    <a id="Mac-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/laptop.png"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title text-center">Apple Mackbook Pro</h4>
                            <p class="card-text text-center">220000 Tk</p>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <a id="Mac-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>


                                <input id="Mac-number" class="text-center input-field-design" type="number" value="0" />
                                <a id="Mac-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>

                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>


        <!--Bag Corner-->
        <section class="container products my-5" id="bags">
            <h2 style="text-align: center; color: rgb(116, 14, 35); margin-bottom: 50px;">Bag Corner</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/bag-1.png" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Red OGIO</h4>
                                <p class="card-text text-center"> 1250 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Red-bag-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Red-bag-number" class="text-center myInputdesign" value="0" />
                                    <a id="Red-bag-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/bag-2.png" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Blue Burton</h4>
                                <p class="card-text text-center"> 1250 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Blue-bag-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Blue-bag-number" class="text-center myInputdesign" value="0" />
                                    <a id="Blue-bag-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/bag-3.png" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Simple Black</h4>
                                <p class="card-text text-center"> 1250 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Black-bag-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Black-bag-number" class="text-center myInputdesign" value="0" />
                                    <a id="Black-bag-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
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
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/burger.jpg" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Yummy Burger</h4>
                                <p class="card-text text-center"> 350 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Burger-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Burger-number" class="text-center myInputdesign" value="0" />
                                    <a id="Burger-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/combo.jpg" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Combo Platter</h4>
                                <p class="card-text text-center"> 650 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Combo-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Combo-number" class="text-center myInputdesign" value="0" />
                                    <a id="Combo-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/salad.jpg" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Fresh Salad</h4>
                                <p class="card-text text-center"> 650 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Salad-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Salad-number" class="text-center myInputdesign" value="0" />
                                    <a id="Salad-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
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
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/polo.jpg" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Blue Polo</h4>
                                <p class="card-text text-center"> 550 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Blue-polo-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Blue-polo-number" class="text-center myInputdesign" value="0" />
                                    <a id="Blue-polo-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="image/t-shirt-2.png" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Multi USPA</h4>
                                <p class="card-text text-center"> 450 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="USPA-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="USPA-number" class="text-center myInputdesign" value="0" />
                                    <a id="USPA-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="image/t-shirt-2.png" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Blue Polo</h4>
                                <p class="card-text text-center"> 550 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Blue-polo1-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Blue-polo1-number" class="text-center myInputdesign" value="0" />
                                    <a id="Blue-polo1-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--toys-->
        <section class="container products my-5" id="toys">
            <h2 style="text-align: center; color: rgb(116, 14, 35); margin-bottom: 50px;">Toys Corner</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/toy.jpg" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Toy Whole Sale</h4>
                                <p class="card-text text-center"> 1050 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Whole-sale-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Whole-sale-number" class="text-center myInputdesign" value="0" />
                                    <a id="Whole-sale-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/toy.jpg" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Spider Man</h4>
                                <p class="card-text text-center"> 550 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Spider-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Spider-number" class="text-center myInputdesign" value="0" />
                                    <a id="Spider-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products  shadow-lg">
                        <img src="images/toy.jpg" class="card-img-top" alt="..." />
                        <div class="card-body my_card_body">
                            <div class="my_card_top mb-4">
                                <h4 class="card-title text-center">Construction Truck</h4>
                                <p class="card-text text-center"> 1550 Tk</p>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a id="Truck-minus" class=" btn  "><i class="fa-solid fa-minus fa-1x"></i></a>
                                    <input id="Truck-number" class="text-center myInputdesign" value="0" />
                                    <a id="Truck-plus" class=" btn "><i class="fa-solid fa-plus fa-1x"></i></a>
                                </div>
                                <button class="cart_btn">Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </section>



        <!--Display inserted producted-->


        <div id="upcoming" class="container">
            <h2 style="text-align: center; color: rgb(116, 14, 35); margin-bottom: 50px; margin-bottom: 50px;">
                Upcoming products</h2>
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







        <!--payment gateway companies-->
        <div class="container">
            <div class="">
                <div class="container mt-5 mb-5 d-none d-md-block   d-lg-block  ">
                    <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-2">
                        <div class="col">
                            <div class="p-3 border bg-light ">

                                <img style="height:80px" class="w-75" src="images/bkash1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-3 border bg-light ">
                                <img style="height:80px" class="w-75" src="images/nogod.png" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-3 border bg-light ">
                                <img style="height:80px" class="w-75" src="images/upay.jpg" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-3 border bg-light ">
                                <img style="height:80px" class="w-75" src="images/dbbl.jpg" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-3 border bg-light ">
                                <img style="height:80px" class="w-75" src="images/rocket.jpg" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-3 border bg-light ">
                                <img style="height:80px" class="w-75" src="images/midland.jpg" alt="">
                            </div>
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

    <!-- <script src="cart.js"></script> -->
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