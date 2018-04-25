<?php
include "config.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$myusername = $_SESSION['login_user'];

$ask_details = "SELECT * FROM user WHERE Username='$myusername'";
$asking_details = $db ->query($ask_details);
$details_row = $asking_details -> fetch_assoc();

// empty detail
$full_name="";
$phone="";
$address="";
$city="";
$state="";
$zip="";
$name_on_card="";
$payment_card="";
$expire_month="";
$expire_year="";



if($details_row["Full_name"]){
    $full_name = $details_row["Full_name"];
}
if($details_row["Phone"]){
    $phone = $details_row["Phone"];
}
if($details_row["Address"]){
    $address = $details_row["Address"];
}
if($details_row["City"]){
    $city = $details_row["City"];
}
if($details_row["State"]){
    $state = $details_row["State"];
}
if($details_row["Zip"]){
    $zip = $details_row["Zip"];
}
if($details_row["Name_on_card"]){
    $name_on_card = $details_row["Name_on_card"];
}
if($details_row["Payment_card"]){
    $payment_card = $details_row["Payment_card"];
}
if($details_row["Expire_month"]){
    $expire_month = $details_row["Expire_month"];
}
if($details_row["Expire_year"]){
    $expire_year = $details_row["Expire_year"];
}

?>