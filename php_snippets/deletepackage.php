<?php

include "config.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$myusername = $_SESSION['login_user'];
$mymainorderID = $_GET['Main_order_ID'];

$delete_order = "DELETE FROM main_order WHERE Main_order_ID=$mymainorderID";
$deleting_order = $db ->query($delete_order);

echo "<script>window.close();</script>";

?>