<?php

include "config.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$myusername = $_SESSION['login_user'];
$ask_unpaid_order = "SELECT Main_order_ID FROM main_order WHERE (Username='$myusername' AND Paid=0)";
$asking_unpaid_order = $db ->query($ask_unpaid_order);

$a = array(); //main_order id
$b = array(); //name
$c = array(); //time
$d = array(); //price

while($row = $asking_unpaid_order->fetch_assoc()){
    foreach($row as $key => $value){
        $link = "localhost/tourtrip_assignment/php_snippets/details.php?Main_order_ID=" . $value;
        $ask_package_name = "SELECT Package_name FROM package WHERE Package_ID = (SELECT Package_ID FROM main_order WHERE Main_order_ID = $value)";
        $asking_package_name = $db ->query($ask_package_name);
        $package_name_row = $asking_package_name -> fetch_assoc();
        $package_name = $package_name_row["Package_name"];

        $ask_total_price = "SELECT Total_price FROM main_order WHERE Main_order_ID = $value";
        $asking_total_price = $db ->query($ask_total_price);
        $total_price_row = $asking_total_price->fetch_assoc();
        $total_price = $total_price_row["Total_price"];

        $ask_package_time = "SELECT Time FROM package WHERE Package_ID = (SELECT Package_ID FROM main_order WHERE Main_order_ID = $value)";
        $asking_package_time = $db ->query($ask_package_time);
        $package_time_row = $asking_package_time -> fetch_assoc();
        $package_time = $package_time_row["Time"];

        array_push($a, $value);
        array_push($b, $package_name);
        array_push($c, $package_time);
        array_push($d, $total_price);
    }
}
// print_r($a);
// print_r($b);
// print_r($c);
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
// }

?>