<?php
    include 'crud-config.php';


    $name = $_POST ['name'];
    $image = $_FILES ['image'];

    $price = $_POST ['price'];

        $imageLocation = $image ['tmp_name'];
        $imageName = $image ['name'];
        $image_des = "image/".$imageName;

        move_uploaded_file($imageLocation, $image_des);

        $insertQuery = " INSERT INTO `review-products`(`name`, `price`, `image`) VALUES ('$name','$price','$image_des')";

        if(mysqli_query($conn, $insertQuery))
        {
            echo "<script> alert('Review posted!!!) </script>" ;
            echo "<script> location.href='index.php' </script>" ;

        }

        else
        {
            echo "<script> alert('Something went wrong. Try again!!!) </script>" ;
        }
?>