<?php
    include 'config.php';
    $r_name = $_POST['r_name'];
    $r_pass = $_POST['r_pass'];
    $r_con_pass = $_POST['r_con_pass'];
    $r_mobile = $_POST['r_mobile'];
    $r_email = $_POST['r_email'];

    $nameReg = "/[a-zA-Z-.]/";
    $mobileReg = "/((\+88)|(\+88-))?01[3-9][0-9]{8}/";
    $emailReg = "/(cse|eee|cee|arch)_\d{10}@lus\.ac\.bd/";
    // var emailReg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    $passReg = "/((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[#,*,.,$,@])).{8,20}/";

    $duplicate_username = mysqli_query($conn,"SELECT * FROM `register` WHERE name='$r_name'");

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
        $insertQuery = "INSERT INTO `register`(`name`, `pass`, `mobile`, `email`) VALUES ('$r_name','$r_pass','$r_mobile','$r_email')";

        if(!mysqli_query($conn,$insertQuery)){
            die("Not inserted");
        }else{
            echo "<script>alert('Registration completed')</script>";
            echo "<script>location.href = 'login.php'</script>";
        }
    }
