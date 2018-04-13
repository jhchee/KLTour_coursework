<?php

include "config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['login_user'])) {
        if (isset($_POST['package_time'])) {
            $myusername = $_SESSION['login_user'];
            $mytime = mysqli_real_escape_string($db, $_POST['package_time']);
            $mymeal = $_POST['package_meal'];
            // different package_ID for different time
            $previous_page = $_SERVER['HTTP_REFERER'];
            $lasturl = basename(parse_url($previous_page)['path']);
            $package_type = floatval($lasturl);
            $package_ID = $mytime + $package_type; 
            // query package price to calculate package price
            $ask_package_price = "SELECT Package_price FROM package WHERE package_ID=$package_ID";
            $sql = $db->query($ask_package_price);
            $package_price = $sql->fetch_assoc();
            $total_price = $package_price["Package_price"];
            $create_package_order_query = "INSERT INTO main_order (Username, Package_ID) VALUES ('$myusername', '$package_ID')";
            $creating_package_order = mysqli_query($db, $create_package_order_query);
    
            $mainid = $db->insert_id;
            // if meal is selected
            if($mymeal == 1){
                // $food = $_POST['food'];
                foreach($_POST['food'] as $key => $value) {
                    // var_dump($key);
                    if ($value!=0){
                        $ask_food_price = "SELECT price FROM food WHERE Food_ID=$key";
                        $sql = $db->query($ask_food_price); 
                        $foodpriceresult = $sql->fetch_assoc();
                        $foodprice = $foodpriceresult["price"];
                        $total_price += $foodprice;
                        $create_food_order_query = "INSERT INTO food_order (Main_order_ID, Food_ID, Quantity, Total_food_price) VALUES ('$mainid', '$key', $value, 'number_format($foodprice*$value, 2)'";
                        $creating_food_order = mysqli_query($db, $create_food_order_query);
                    }
                }
                
            } 
            $update_total_price_query = "UPDATE main_order SET Total_price='$total_price' WHERE Main_order_ID='$mainid'";
            $updating_total_price = mysqli_query($db, $update_total_price_query);
        }    
    }
    else {
        return 0;
    }   
}
else return 0; 




?>