<?php
if(isset($_POST['login'])){
    include 'config.php';
    $l_name = $_POST['l_name'];
    $l_pass = $_POST['l_pass'];


    $result = mysqli_query($conn,"SELECT * FROM `amigosdb2` WHERE username='$l_name' And pass='$l_pass' And status='active' "  );

    if(mysqli_num_rows($result))
    {
        session_start();
        $_SESSION['name'] = $l_name;
     
        if( $_POST['l_name'] =='Team Amigo' && $_POST['l_pass']== 'amigoA@123' )
        {
            echo "<script>location.href = 'adminPanel.php'</script>";
    
        } 

    if(isset($_POST['rememberme']))
    {
       
     setcookie('usercookie',$l_name, time()+86400); //setting cookies from just now time to 1 day
     setcookie('passwordcookie',$l_pass, time()+86400);  //setting cookies from just now time to 1 day
     echo "<script>alert('Successfully logged in!!!!')</script>";

     echo "<script>location.href = 'home.php'</script>";

    }
      echo "<script>alert('Successfully logged in!!!!')</script>";

        echo "<script>location.href = 'home.php'</script>";
    }


    


    else{
        echo "<script>alert('Kindly activate your account through the mail we have sent!!')</script>";
        echo "<script>location.href = 'login.php'</script>";

    }
}