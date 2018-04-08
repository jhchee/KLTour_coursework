<?php


include "config.php";
session_start();

$type_of_food[8] = array(0,0,0,0,0,0,0,0);

// $type_of_food = 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $food4 = mysqli_real_escape_string($db, $_POST['food4']);
    echo $food4;
}
// foreach($type_of_food as $food){
//     print_r($food);
// }
// echo $food[0];
// var_dump($type_of_food);






?>