<?php
include 'crud-config.php';
//value coming through URL so using GET

$id = $_GET['id'];
$deleteQuery = "DELETE FROM `review-products` WHERE id= '$id' ";

mysqli_query($conn,$deleteQuery);
header("location:index.php");



?>