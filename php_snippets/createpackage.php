<?php

include "config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = $_SESSION['login_user'];
    $mytime = mysqli_real_escape_string($db, $_POST['package_time']);
    $mymeal = mysqli_real_escape_string($db, $_POST['package_meal']);
    
    $end = end(explode('/', $_SERVER['HTTP_REFERER']));
    // $sql = "INSERT INTO main_order(Username, Email, Password) Values ('$myusername', '$myemail', '$mypassword')";

    if($mytime==10.00){
        echo "hello world";
    }
    // echo $_SERVER['HTTP_REFERER'];
    echo $end;
}



?>