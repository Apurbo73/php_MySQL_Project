<?php
include 'crud-config.php';
$id = $_POST['id'];
$name = $_POST ['name'];
$price = $_POST ['price'];
$image = $_FILES ['image'];

$imageLocation = $image ['tmp_name'];
$imageName = $image ['name'];
$image_des = "image/".$imageName;

move_uploaded_file($imageLocation, $image_des);

$updateQuery = " UPDATE `insert-products` SET `name`='$name',`price`='$price',`image`='$image_des' WHERE id =$id";



if (mysqli_query($conn, $updateQuery))
{
    echo "<script> alert('Updated!!!') </script>" ;
    echo "<script> location.href='adminPanel.php' </script>" ;
}

else{
    echo "<script> alert('Not Updated!!!') </script>" ;
   echo "<script> location.href='index.php' </script>" ;
}
?>