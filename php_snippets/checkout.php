<?php

include "config.php";
session_start();
$myusername = $_SESSION['login_user'];
$ask_unpaid_order = "SELECT Main_order_ID FROM main_order WHERE Username='$myusername' AND Paid=0";
$sql = $db->query($ask_unpaid_order);
$result = $sql->fetch_assoc();
$unpaid_order_list = $result["Main_order_ID"];


?>