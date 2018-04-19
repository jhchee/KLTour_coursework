<?php

include "php_snippets/config.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$myusername = $_SESSION['login_user'];
$mymainorderID = $_GET['Main_order_ID'];

$ask_package_name = "SELECT Package_name FROM package WHERE Package_ID = (SELECT Package_ID FROM main_order WHERE Main_order_ID = $mymainorderID)";
$asking_package_name = $db ->query($ask_package_name);
$package_name_row = $asking_package_name -> fetch_assoc();
$package_name = $package_name_row["Package_name"];
echo "$package_name";

$ask_package_time = "SELECT Time FROM package WHERE Package_ID = (SELECT Package_ID FROM main_order WHERE Main_order_ID = $mymainorderID)";
$asking_package_time = $db ->query($ask_package_time);
$package_time_row = $asking_package_time -> fetch_assoc();
$package_time = $package_time_row["Time"];
echo "$package_time";

$ask_total_price = "SELECT Total_price FROM main_order WHERE Main_order_ID = $mymainorderID";
$asking_total_price = $db ->query($ask_total_price);
$total_price_row = $asking_total_price->fetch_assoc();
$total_price = $total_price_row["Total_price"];
echo "$total_price";

$myfood_name = array();
$myfood_quantity = array();

$join_food_table = "SELECT food.Food_name, food_order.Quantity FROM food INNER JOIN food_order on food_order.Food_ID = food.Food_ID AND food_order.Main_order_ID=$mymainorderID";
$foodname_quantity_table = $db ->query($join_food_table);
while ($row = $foodname_quantity_table->fetch_assoc()){
    array_push($myfood_name, $row["Food_name"]);
    array_push($myfood_quantity, $row["Quantity"]);
}

?>