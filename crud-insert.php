<?php
    include 'config.php';
    // include 'config.php';
    // $forEmailname = $_POST['r_name'];
    // $r_email = $_POST ['r_email'];


    $name = $_POST['name'];
    $image = $_FILES['image'];

        $price = $_POST ['price'];
        $imageLocation = $image ['tmp_name'];
        $imageName = $image ['name'];
        $image_des = "image/".$imageName;

        move_uploaded_file($imageLocation, $image_des);

        $insertQuery = " INSERT INTO `insert-products`(`name`, `price`, `image`) VALUES ('$name','$price','$image_des')";

        if(mysqli_query($conn, $insertQuery))
        {
        //Sending email notification to user during new products launching
        $subject ="New Products";
        $body = " Hi, $name.Great news. We are launching new exciting products.Take a look through the link below. Have a good day!!
        http://localhost/web/home.php        
        Sincerely: Team Amigos, Majortila, Sylhet.
       ";
    
    
        $sender_email = "From: apurbodebnath50@gmail.com";
        if(mail("apubdofficial@gmail.com",$subject,$body, $sender_email))
        {
          

    
        }
            echo "<script> alert('Review posted!!!) </script>" ;
        echo "<script> location.href='adminPanel.php' </script>" ;

        }

        else
        {
            echo "<script> alert('Something went wrong. Try again!!!) </script>" ;
        }
?>