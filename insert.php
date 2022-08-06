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
    $emailReg = "/(cse|eee|cee|arch|law|bba|eng)_\d{10}@lus\.ac\.bd/";
    // var emailReg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    $passReg = "/((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[#,*,.,$,@])).{8,20}/";

    $duplicate_username = mysqli_query($conn,"SELECT * FROM `fresh_table` WHERE username='$r_name'");

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
        $insertQuery = "INSERT INTO `fresh_table`(`username`, `pass`, `mobile`, `email`,`token`) VALUES ('$r_name','$r_pass','$r_mobile','$r_email','$token')";

        if(!mysqli_query($conn,$insertQuery)){
            die("Not inserted");
        }else{
            echo "<script>alert('Registration completed')</script>";
            echo "<script>location.href = 'login.php'</script>";
        }
    }