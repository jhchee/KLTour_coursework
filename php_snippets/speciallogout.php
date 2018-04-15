<?php
    function executeLogout(){
        session_start();
        session_destroy();
    }

    if (isset($_GET['logouttoken'])) {
    executeLogout();
    header("Location: ../homepage.php");
    }
?>