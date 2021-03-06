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
            
            //change package
            if (!empty($_POST['Main_order_ID'])){
                $mainid = $_POST['Main_order_ID'];
                $update_main_order = "UPDATE main_order SET Package_ID='$package_ID' WHERE Main_order_ID=$mainid";
                $updating_main_order = $db->query($update_main_order);

                $delete_previous_food_order = "DELETE FROM food_order WHERE Main_order_ID=$mainid";
                $deleting_previous_food_order = $db->query($delete_previous_food_order);
            }
            else {
                $create_package_order_query = "INSERT INTO main_order (Username, Package_ID) VALUES ('$myusername', '$package_ID')";
                $creating_package_order = mysqli_query($db, $create_package_order_query);
                // Get last main_order_id
                $mainid = $db->insert_id;
            }
            
            // if meal is selected
            if($mymeal == 1){
                foreach($_POST['food'] as $key => $value) {
                    if ($value!=0){
                        $ask_food_price = "SELECT price FROM food WHERE Food_ID=$key";
                        $sql = $db->query($ask_food_price); 
                        $foodpriceresult = $sql->fetch_assoc();
                        $foodprice = $foodpriceresult["price"];
                        $total_food_price = $foodprice*$value;
                        $total_price += $total_food_price;
                        $create_food_order_query = "INSERT INTO food_order (Main_order_ID, Food_ID, Quantity, Total_food_price) VALUES ('$mainid', '$key', '$value', '$total_food_price')";
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