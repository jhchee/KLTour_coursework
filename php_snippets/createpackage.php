<?php

include "config.php";
session_start();
// include "food.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = $_SESSION['login_user'];
    $mytime = mysqli_real_escape_string($db, $_POST['package_time']);
    $mymeal = mysqli_real_escape_string($db, $_POST['package_meal']);
    $food4 = mysqli_real_escape_string($db, $_POST['food4']);
    // different package_ID for different time
    $previous_page = $_SERVER['HTTP_REFERER'];
    $lasturl = basename(parse_url($previous_page)['path']);
    $package_type = floatval($lasturl);
    $package_ID = $mytime + $package_type;

    echo ("$package_ID\n");

    
    // echo $food4;

    // header("location: $lasturl");


    // $package_price = mysqli_query($db, "SELECT Package_price FROM package WHERE Package_ID='$package_ID'");
    // while ($)
    // if ($mymeal) {
    //     $total_price = 10.00 + $package_price[;
    // }
    // else $total_price = $package_price;
    


    // $create_order = "INSERT INTO main_order(Username, Package_ID, Total_price, Meal) Values ('$myusername', '$package_ID', '$total_price', '$mymeal')";
    // $result = mysqli_query($db, $create_order);
}



?>