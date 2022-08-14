<?php
if(isset($_POST['login'])){
    include 'config.php';
    $l_name = $_POST['l_name'];
    $l_pass = $_POST['l_pass'];
    // $r_email = $_POST['r_email'];

    $result = mysqli_query($conn,"SELECT * FROM `fresh_table` WHERE username='$l_name' And pass='$l_pass'");

    if(mysqli_num_rows($result)){
        session_start();
        $_SESSION['name'] = $l_name;
        

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
        echo "<script>alert('Username and Password is not matching')</script>";
        echo "<script>location.href = 'login.php'</script>";
    }
}
else{
    echo "<script>location.href = 'login.php'</script>";

}