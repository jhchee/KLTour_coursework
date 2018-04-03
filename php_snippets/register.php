<?php
include"config.php";

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $myemail = mysqli_real_escape_string($db, $_POST['email']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    
    $sql = "INSERT INTO user(Username, Email, Password) Values ('$myusername', '$myemail', '$mypassword')";
    $result = mysqli_query($db, $sql);
    
    if (mysqli_error($db)) {
        echo '<script type="text/javascript">',
        'setTimeout(parent.alert("Username or email has been used, check your input"),1000);',
        '</script>';
        header('Refresh: 0; url=http://localhost/tourtrip_assignment/login.html');
    }
    else{
        $_SESSION['login_user'] = $myusername;
        echo '<script type="text/javascript">',
        'parent.location.reload();',
        '</script>';
    }
    
}

?>