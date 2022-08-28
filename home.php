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
                                    <button class="btn btn-danger p-1 m-1 rounded" type="submit">Search</button>
                                    <input type="text" class=" p-1  rounded" placeholder="what are you looking for?..">

                                </li>
                                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                                    <button class="btn btn-primary " type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">My Cart</button>

                                    <div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasRight"
                                        aria-labelledby="offcanvasRightLabel">
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
        <section class="container">
            <!--Carousel items-->
            <div class="container carousel-section">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row panda-bg-info bg-gradient d-flex align-items-center p-5">
                                <div class="col-lg-7">
                                    <h1>Apple Mackbook Pro</h1>
                                    <h4>250000 Tk</h4>
                                </div>
                                <div class="col-lg-5"> <img src="images/product-1.png" class="d-block w-100"
                                        alt="..." /> </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row panda-bg-info bg-gradient d-flex align-items-center p-5">
                                <div class="col-lg-7">
                                    <h1>Apple Pro</h1>
                                    <h4>250000 Tk</h4>
                                </div>
                                <div class="col-lg-5"> <img src="images/slider-1.png" class="d-block w-100" alt="..." />
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row panda-bg-info bg-gradient d-flex align-items-center p-5">
                                <div class="col-lg-7">
                                    <h1>JBL Portable Speaker</h1>
                                    <h4>5000Tk</h4>
                                </div>
                                <div class="col-lg-5"> <img src="images/slider-3.png" class="d-block w-100" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span
                            class="visually-hidden">Previous</span> </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span
                            class="visually-hidden">Next</span> </button>
                </div>
            </div>
        </section>
        <section class="container">

            <!--text sliding-->

            <marquee width="100%" direction="left" height="100px">
                <p style="font-size: 20px;">Welcome to <span style="color: orange;">Amigos</span> <span
                        style="color: rgb(11, 11, 141);">Outlet.</span>Thanks for visiting. Hope you will enjoy.</p>
            </marquee>
            <!--Best selling products-->
            <section class="container">
                <h1 style="text-align: center; margin-bottom: 20px;">Best Selling</h1>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-6 col-md-3 justify-content-center">
                            <div class="product1"> <img src="images/bag.png" alt="" />
                                <h5>Bag</h5>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 justify-content-center align-items-center">
                            <div class="product2"> <img src="images/perfume.png" alt="" />
                                <h5>perfume</h5>
                            </div>
                            <div class="product3"> <img src="images/shoe.png" alt="" />
                                <h5>shoe</h5>
                            </div>
                        </div>
                        <div class="col-6 extra-product"> <img src="images/pale-order.png" alt="" /> </div>
                    </div>
                </div>
            </section>
        </section>
        <!--Categories-->
        <section class="container mt-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="p-3 border bg-warning d-flex align-items-center justify-content-between rounded-3">
                        <h1 class="text-white">Watch</h1> <img src="images/watch.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="p-3 border bg-warning d-flex align-items-center justify-content-between rounded-3">
                        <h1 class="text-white">Bag</h1> <img src="images/shoes.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="p-3 border bg-warning d-flex align-items-center justify-content-between rounded-3">
                        <h1 class="text-white">Shoes</h1> <img src="images/shoes.png" alt="" />
                    </div>
                </div>
            </div>
        </section>
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
                        <div class="">
                            <div class="container">

                                <a id="Xiomi-plus" class=" btn "><i style="margin-left:50px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>


                                <input id="Xiomi-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="Xiomi-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>


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
                        <div class="">
                            <div class="container">
                                <a id="Iphone-plus" class=" btn "><i style="margin-left:50px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>
                                <input id="Iphone-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="Iphone-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>


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
                </div>
            </div>
        </section>
        <!--Laptops-->
        <section class="container products mt-5" id="Gadget">
            <h2 style="text-align: center; color: rgb(116, 14, 35); margin-bottom: 50px;">Laptops</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/product-2.png"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title text-center">Lenovo ideapad 330</h4>
                            <p class="card-text text-center">45000 Tk</p>
                        </div>
                        <div class="">
                            <div class="container">
                                <a id="Lenovo-plus" class=" btn "><i style="margin-left:50px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>

                                <input id="Lenovo-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="Lenovo-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>

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
                                <a id="Dell-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>

                                <input id="Dell-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="Dell-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>

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
                                <a id="Mac-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>


                                <input id="Mac-number" class="text-center input-field-design" type="number" value="0" />
                                <a id="Mac-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>

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
                                <a id="Sply-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>

                                <input id="Sply-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="Sply-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>

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
                                <a id="Nike-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>

                                <input id="Nike-number" class="text-center input-field-design" type="number"
                                    value="0" />

                                <a id="Nike-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>

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
                                <a id="Red-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>


                                <input id="Red-number" class="text-center input-field-design" type="number" value="0" />
                                <a id="Red-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>

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
                                <a id="Red-bag-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>

                                <input id="Red-bag-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="Red-bag-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>


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
                                <a id="Blue-bag-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>

                                <input id="Blue-bag-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="Blue-bag-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>


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
                                <a id="Black-bag-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>


                                <input id="Black-bag-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="Black-bag-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>


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
                                <a id="Burger-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>


                                <input id="Burger-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="Burger-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-60 products border-0 shadow-lg"> <img style="height:250px" src="images/combo.jpg"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title text-center">Combo Platter</h5>
                            <h6 class="card-text text-center">650 Tk.</h6>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <a id="Combo-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>

                                <input id="Combo-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="Combo-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>


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
                                <a id="Salad-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>

                                <input id="Salad-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="Salad-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>

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
                                <a id="Blue-polo-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>

                                <input id="Blue-polo-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="Blue-polo-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>


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
                                <a id="USPA-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>


                                <input id="USPA-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="USPA-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>

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
                                <a id="Blue-polo1-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>


                                <input id="Blue-polo1-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="Blue-polo1-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>

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
                    <div class="card h-60 products border-0 shadow-lg"> <img src="images/toy.jpg" class="card-img-top"
                            alt="..." />
                        <div class="card-body">
                            <h5 class="card-title text-center">Toy Whole Sale</h5>
                            <h6 class="card-text text-center">1050 Tk.</h6>
                        </div>
                        <div class="m-3">
                            <div class="container">
                                <a id="Whole-sale-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>


                                <input id="Whole-sale-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="Whole-sale-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>

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
                                <a id="Spider-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>


                                <input id="Spider-number" class="text-center input-field-design" type="number"
                                    value="0" />
                                <a id="Spider-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>

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
                                <a id="Truck-plus" class=" btn "><i style="margin-left:0px"
                                        class="fa-solid fa-square-plus fa-3x"></i></a>


                                <input id="Truck-number" class="text-center input-field-design" type="number"
                                    value="0" />

                                <a id="Truck-minus" class=" btn  " style="margin-left: 0px;"><i
                                        class="fa-solid fa-square-minus fa-3x"></i></a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Crud operation starts  -->


        <form class="container mb-5 w-80 form-design" action="crud-insert.php" method="post"
            enctype="multipart/form-data" onsubmit="return formvalidation()">
            <div class="mb-3">
                <h2 class="text-center mb-5 mt-2">Insert products</h2>
                <input type="text" placeholder="Enter product name" class="form-control" name="name" id="ifname"
                    aria-describedby="emailHelp">
                <span id="errorInFirstName"> </span></td>

            </div>

            <div class="mb-3">
                <input type="file" placeholder="Upload picture of product" name="image" class="form-control" id="ipass">
                <span id="errorInPass"> </span>
            </div>


            <div class="mb-3">
                <input type="mobile" placeholder="Enter your feedback" class="form-control" name="price" id="imobile"
                    aria-describedby="emailHelp"><span id="errorInMobile"> </span>
            </div>


            <button type="submit" name="insert" class="btn btn-success w-100">Submit</button>

        </form>

        <!--Display reviews-->


        <div class="container bg-success">
            <div class="card  text-center " style="width: 18rem;">
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






        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex bg-danger ">

                            <?php
   include 'crud-config.php';


   $alldata = mysqli_query($conn, " SELECT * FROM `insert-products` ");
   while( $row = mysqli_fetch_array($alldata))
   { $i=0;
	echo
	"
	
      <div> 
	  <img src= '$row[image]' alt= 'image' width ='250px'>
      <h2> $row[name] </h2> <br>
      <h2> $row[price] </h2> <br> 
        </div>
       

      ";
     
if ($i==3)
{
    echo "<script> okay </script>" ;
}

   }

     ?>






                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!--Accordion section-->
        <section class="container my-5 accordion">
            <h1 style="text-align: center; color: rgb(116, 14, 35);">Eid offers</h1>
            <div class="accordioncolor">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <a class="accordion-button collapsed mb-1" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Biriyani
                            </a>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="d-flex">

                                    <div class="bg-success mx-5">
                                        <img style="width: 200px; height: 200px; justify-content: center; margin-left: 200px; margin:20px"
                                            src="images/biriyani.jpg" alt="" /> <br>
                                        <h6>Regular chicken biriyani</h6>
                                        <button class="btn btn-danger mx-5 mb-2 ">order now</button>
                                    </div>

                                    <div class="bg-primary mx-5">
                                        <img style="width: 200px; height: 200px; justify-content: center; margin-left: 20px; margin:20px"
                                            src="images/biriyani.jpg" alt="" /> <br>
                                        <h6 style="margin-left:20px">Regular Kacchi biriyani</h6>

                                        <button class="btn btn-danger mx-5 mb-2 ">order now</button>
                                    </div>

                                    <div class="bg-danger mx-5 ">
                                        <img style="width: 200px; height: 200px; justify-content: center; margin-left: 20px; margin:20px"
                                            src="images/biriyani.jpg" alt="" /> <br>
                                        <h6>Regular chicken biriyani</h6>

                                        <button class="btn btn-primary mx-5 mb-2 text-center ">order now</button>
                                    </div>


                                </div>
                                <h1 class="text-center">Biriyani</h1>
                                <p> Hyderabadi Biryani is characteristically distinct. The aroma, taste, tender meat,
                                    the Zaffran, everything gives it a distinguished appearance. ... Yoghurt makes the
                                    meat tender, lemon tangy, fried onions add a crispy sweet taste, and Hyderabadi
                                    spices make it hot. </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <a class="accordion-button collapsed mb-1" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Panjabi
                                </a>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"> <img style="margin-left: 500px;" src="images/panjabi.webp"
                                        alt="" />
                                    <h1 class="text-center">Cotton Panjabi</h1>
                                    <p class="text-center">Best quality panjbai collection. Made of 100% pure cotton.
                                        Reasonable price depending on quality.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <a class="accordion-button collapsed mb-1" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Children Toys
                                </a>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"> <img style="margin-left: 200px;" src="images/toy1.jpg"
                                        alt="" />
                                    <h1 class="text-center">Kid toys</h1>
                                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam
                                        rerum autem consequuntur enim soluta quas nemo labore rem dolorum totam?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Student offer-->
        <div class="container">
            <div class="row">
                <section class="container" id="students">
                    <section style="height: 300px;"
                        class="conatiner d-flex justify-content-center panda-bg-info d-flex align-items-center rounded-3">
                        <div>
                            <h1>Mega Special Student's Offer</h1>
                            <p>Students who have 90% attendance will be gifted with 60% discount</p>
                            <input class="form-control" type="text"
                                placeholder="Submit all required information with proof" />
                            <br />
                            <button class="button btn btn-success">Submit</button>
                        </div>
                    </section>
                </section>
                <section class="container">
                    <marquee width="100%" direction="left" height="100px">
                        <p style="font-size: 20px; color: rgb(3, 54, 54);">This is a organization specifically working
                            for students. We always try do make some crazy offers for students. Visit us and be a part
                            of <span style="color:orange;">Amigos</span> <span style="color:blue;">Outlet</span> .</p>
                    </marquee>
                </section>
            </div>
        </div>



        <!--Owner's speech done with off-canvas-right-->
        <!--Mr. Owner-->
        <section class="container d-flex justify-content-center py-2">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight">Owner's Speech</button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header align-items-center">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div> <img class="mb-3" style="width: 350px; height:350px;" src="images/apubd.JPG" alt="" />
                        <h2 class="text-center">Apurbo Deb Nath</h2>
                        <br />
                        <p style="font-size: 20px; text-align: justify;"> Hey, How are you all doing? Welcome to
                        Amigos Outlet. Its our pleasure that we are here in Sylhet. We are readyto serve the
                            wonderful Sylheti brother and Sisters. We have made this plan targetting the stduents of
                            Sylhet. Students of school, colleges and universityes will be very much surprised and
                            glad visiting us.We have a vast arrangement of every gadgets regarding study purpose,
                            simple shopping, food coart. We have a kids section also. There are lot of amazing
                            offers dor our buyers. Eid offers are going on. We are plamming to bring a handsome
                            discount offer for the students who gains 90% attendents of his/her studies. Yes that is
                            becoming a crazy offer.Visit us and be a part of <span
                                style="color: orange; font-size: 25px; font-weight: 700;">Mega</span> <span
                                style="color: steelblue; font-size: 25px; font-weight: 700;">Mall</span> </p>
                    </div>
                </div>
            </div>
        </section>
        <!--Offcanvas section ends-->



        <!--Crud operation starts  -->


        <form class="container mb-5 w-80 form-design" action="crud-insert.php" method="post"
            enctype="multipart/form-data" onsubmit="return formvalidation()">
            <div class="mb-3">
                <h2 class="text-center mb-5 mt-2">Review</h2>
                <input type="text" placeholder="Enter product name" class="form-control" name="name" id="ifname"
                    aria-describedby="emailHelp">
                <span id="errorInFirstName"> </span></td>

            </div>

            <div class="mb-3">
                <input type="file" placeholder="Upload picture of product" name="image" class="form-control" id="ipass">
                <span id="errorInPass"> </span>
            </div>


            <div class="mb-3">
                <input type="mobile" placeholder="Enter your feedback" class="form-control" name="price" id="imobile"
                    aria-describedby="emailHelp"><span id="errorInMobile"> </span>
            </div>


            <button type="submit" name="insert" class="btn btn-success w-100">Submit</button>

        </form>

        <!--Display reviews-->


        <div class="container" id="reviews">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Price(Tk)</th>
                        <th scope="col">Image</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>


                    </tr>
                </thead>
                <tbody>

                    <?php
   include 'crud-config.php';


   $alldata = mysqli_query($conn, " SELECT * FROM `insert-products` ");
   while( $row = mysqli_fetch_array($alldata))
   {
	echo
	"<tr>
	 <td> $row[id] </td>
	 <td> $row[name] </td>
	 <td> $row[price] </td>
	 <td> <img src= '$row[image]' alt= 'image' width ='100px'> </td>
	 <td> <a class=' btn btn-danger' href='delete.php? id= $row[id]'>Delete </a></td>
	 <td> <a class=' btn btn-success' href='update.php? id= $row[id]'>Update </a></td>

	</tr> ";

   }

     ?>



                </tbody>
            </table>
        </div>


        <!-- new code for cart sourav-->
        <!-- <div class="container">
                <div class="card" id="item1">
                    <img src="images/phone-2.png">
                    <div class="title">Shirt</div>
                    <div>
                        <label>Size: </label>
                        <select>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <button onclick="addToCart(item1)">Add to Cart</button>
                </div>
                <div class="card" id="item2">
                    <img src="img/shirt-3.png" alt="">
                    <div class="title">Shirt-2</div>
                    <div>
                        <label>Quantity: </label>
                        <select>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <button onclick="addToCart(item2)">Add to Cart</button>
                </div>
            </div>
            <div class="cart" id="cart">
                <div class="title">CART</div>
                <hr>
                <div id="title"></div>
            </div> -->






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
    <!-- <script src="cart.js"></script> -->

</body>

</html>