<?php
if(isset($_POST['login'])){
    include 'config.php';
    $l_name = $_POST['l_name'];
    $l_pass = $_POST['l_pass'];

    $result = mysqli_query($conn,"SELECT * FROM `register` WHERE name='$l_name' And pass='$l_pass'");

    if(mysqli_num_rows($result)){
        session_start();
        $_SESSION['name'] = $l_name;
        echo "<script>location.href = 'index.php'</script>";
    }else{
        echo "<script>alert('Username and Password is not matching')</script>";
        echo "<script>location.href = 'login.php'</script>";
    }
}
else{
    echo "<script>alert('Button is not Clicked')</script>";
    echo "<script>location.href = 'login.php'</script>";

}