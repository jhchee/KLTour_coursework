<?php
include "config.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = $_SESSION['login_user'];

    
    $myfullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $myphone = mysqli_real_escape_string($db, $_POST['phone']);
    $myaddress = mysqli_real_escape_string($db, $_POST['address']);
    $mycity = mysqli_real_escape_string($db, $_POST['city']);
    $mystate = mysqli_real_escape_string($db, $_POST['state']);
    $myzip = mysqli_real_escape_string($db, $_POST['zip']);
    $mycardname = mysqli_real_escape_string($db, $_POST['cardname']);
    $mycardnumber = mysqli_real_escape_string($db, $_POST['cardnumber']);
    $myexpiremonth = mysqli_real_escape_string($db, $_POST['expmonth']);
    $myexpireyear = mysqli_real_escape_string($db, $_POST['expyear']);


    $update_personal_info = "UPDATE user 
    SET Full_name='$myfullname', Phone=$myphone, Address='$myaddress', City='$mycity', Zip='$myzip', 
    Name_on_card='$mycardname', Payment_card='$mycardnumber', Expire_year='$myexpireyear', Expire_month='$myexpiremonth'   
    WHERE Username='$myusername'";
    $updating_personal_info = $db ->query($update_personal_info);

    if (mysqli_error($db)) {
    }
    else {
        $checkout = "UPDATE main_order SET Paid=1 WHERE Username='$myusername'";
        $checking_out = $db ->query($checkout);
         echo '<script type="text/javascript">',
         'parent.loader();',
         'setTimeout(function(){parent.location.reload(true);}, 2000);',
         '</script>';
    }


}

?>