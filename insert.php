<?php
    include 'config.php';
    $r_name = $_POST['r_name'];
    $r_pass = $_POST['r_pass'];
    $r_con_pass = $_POST['r_con_pass'];
    $r_mobile = $_POST['r_mobile'];
    $r_email = $_POST['r_email'];
    $token =bin2hex(random_bytes(15));
    $nameReg = "/[a-zA-Z-.]/";
    $mobileReg = "/((\+88)|(\+88-))?01[3-9][0-9]{8}/";
    $emailReg = "/[a-zA-Z0-9_\-\.]+[@][a-z]+[\.][a-z]{2,3}/";
    // var emailReg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    $passReg = "/((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[#,*,.,$,@])).{8,20}/";

    $duplicate_username = mysqli_query($conn,"SELECT * FROM `amigosdb2` WHERE username='$r_name'");

    if(mysqli_num_rows($duplicate_username)>0){
        echo "<script>alert('Username already taken')</script>";
        echo "<script>location.href = 'register.php'</script>";
    }

    else if(!preg_match($nameReg,$r_name )){
        echo "<script>alert('Invalid Username')</script>";
        echo "<script>location.href = 'register.php'</script>";
    }
    else if(!preg_match($passReg,$r_pass)){
        echo "<script>alert('Invalid password')</script>";
        echo "<script>location.href = 'register.php'</script>";
    }
    else if($r_pass !== $r_con_pass){
        echo "<script>alert('pass and confirm not match')</script>";
        echo "<script>location.href = 'register.php'</script>";
    }
    else if(!preg_match($mobileReg,$r_mobile)){
        echo "<script>alert('Invalid mobile')</script>";
        echo "<script>location.href = 'register.php'</script>";
    }
    else if(!preg_match($emailReg,$r_email)){
        echo "<script>alert('Invalid email')</script>";
        echo "<script>location.href = 'register.php'</script>";
    }
    else{
        $insertQuery = "INSERT INTO `amigosdb2`(`username`, `pass`, `mobile`, `email`,`token`,`status` ) VALUES ('$r_name','$r_pass','$r_mobile','$r_email','$token','inactive')";


        //Email Activation code
        $subject ="Email Activation";
        $body = " Hi, $r_name.Its so nice of you that you are going to be part of Amigos Outlet. Kindly activate your account clicking the link.
        http://localhost/web/activation.php?token=$token        
        Sincerely: Team Amigos, Majortila, Sylhet.
       ";
    
    
        $sender_email = "From: apurbodebnath50@gmail.com";
        if(mail($r_email,$subject,$body, $sender_email))
        {
          echo "<script>alert('Kindly check your mail to activate your account!!')</script>";
          // header('location:login.php');
          echo "<script>location.href='login.php'</script>";
    
        }
    }

        if(!mysqli_query($conn,$insertQuery)){
            die("Not inserted");
        }else{
            echo "<script>alert('Registration completed')</script>";
            echo "<script>location.href = 'login.php'</script>";
        }
    