<?php

include "config.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$myusername = $_SESSION['login_user'];
$mymainorderID = $_GET['Main_order_ID'];

$ask_package_ID = "SELECT Package_ID FROM main_order WHERE main_order_ID=$mymainorderID";
$asking_package_ID = $db ->query($ask_package_ID);
$package_ID_row = $asking_package_ID -> fetch_assoc();
$package_ID = $package_ID_row["Package_ID"];
echo $mymainorderID;
echo $package_ID;
?>
