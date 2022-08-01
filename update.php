<?php
include 'crud-config.php';
//value coming through URL so using GET

$id = $_GET['id'];
$dataFetchQuery =" SELECT * FROM `review-products` WHERE id= '$id' " ;
$record = mysqli_query($conn,$dataFetchQuery );

$dataArray = mysqli_fetch_array($record);


?>





<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Mega Mall E-Commerce</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	<!-- Font Awsome -->
	<script src="https://kit.fontawesome.com/2fb599ceee.js" crossorigin="anonymous"></script>
	<!--CSS style-->
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="signin.html" />
	<link rel="stylesheet" href="signup.html" />
	<link rel="stylesheet" href="Shopping Cart.html" /> </head>
	<link rel="stylesheet" href="register.php">

	<header>
		<section class="container nav-design">
			<div>
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="container">
						<a class="navbar-brand" href="#"> <img src="images/logo hot.png" alt="" width="" height="" class="d-inline-block align-text-top" /> </a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
								<li class="nav-item"> <a class="nav-link active" aria-current="page" href="#">Home</a> </li>
								<li class="nav-item"> <a class="nav-link" href="#Gadget">Gadget</a> </li>
								<li class="nav-item"> <a class="nav-link" href="#bags">Bags</a> </li>
								<li class="nav-item"> <a class="nav-link" href="#shoes">Shoes</a> </li>
								<li class="nav-item"> <a class="nav-link" href="#cloth">Cloths</a> </li>
								<li class="nav-item"> <a class="nav-link" href="#toys">Toys</a> </li>
								<li class="nav-item"> <a class="nav-link" href="#food">Foods</a> </li>
								<li class="nav-item"> <a class="nav-link" href="#students"> Offers</a> </li>
								<li class="nav-item"> <a class="nav-link" href="#Shopping_Cart">My Cart</a> </li>
								<li class="nav-item"> <a class="nav-link" href="logout.php"> Log out</a> </li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</section>
	</header>







<!--Crud operation update starts  -->


<form class="container w-80 form-design" action="updateAction.php" method="post" enctype="multipart/form-data" onsubmit="return formvalidation()">
        <div class="mb-3">
            <h2 class="text-center mb-5 mt-2 text-danger">Update Products</h2>
            <input type="text" placeholder="Enter product name" class="form-control" name="name" value="<?php echo $dataArray['name']  ?>" Required id="ifname" aria-describedby="emailHelp">
            <span id="errorInFirstName" > </span></td>

          </div>

        <div class="mb-3">
          <input type="file"  placeholder="Upload picture of product"  name="image"  class="form-control" id="ipass">
          <span id="errorInPass"> </span>
        </div>

       
		<div class="mb-3">
            <input type="mobile" placeholder="Enter your feedback" class="form-control" name="price" value="<?php echo $dataArray['price'] ?>"Required id="imobile" aria-describedby="emailHelp"><span id="errorInMobile"> </span>
          </div>


          <div class="mb-3">
            <img src="<?php echo $dataArray['image'] ?>" alt="image" width= "150px">
       </div>

       <input type="hidden" name= "id" value="<?php echo $dataArray['id'] ?>" >
        <button type="submit" name= "update" class="btn btn-success w-100">Update Products</button>
      
      </form>

<!--Display reviews-->


<div class="container">
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


   $alldata = mysqli_query($conn, " SELECT * FROM `review-products` ");
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






	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="javascript.js"></script>
</body>

</html>