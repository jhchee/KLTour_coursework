<?php
include "config.php";

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db, $_POST['username/email']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT * FROM user WHERE (Username = '$myusername' OR Email = '$myusername') AND Password = '$mypassword'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        // session_is_registered("myusername");
        $_SESSION['login_user'] = $myusername;
    } else {
        $error = "Your Login Name or Password is invalid";
        echo $error;
    }

    echo '<script type="text/javascript">',
     'parent.location.reload();',
     '</script>';

    echo "hello world";

}


