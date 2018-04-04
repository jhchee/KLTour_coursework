<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- include Bootstrap css and Js -->

    <!-- include Google font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- include Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- include personalised stylesheet -->
    <link rel="stylesheet" href="styling/style.css">
    <!-- include personalised script -->
    <script src="scripting/loginform.js"></script>
    <title>Home</title>
</head>

<body>

    <!-- navigation bar -->
    <div class="navbar">
        <a href="#" style="padding-right:60px;">
            <img src="images/KL Tour.png" alt="KLTour-logo" height="29" width="80">
        </a>
        <a href="#" class="active">Home</a>
        <a onclick="hide_user_cart()" href="javascript:void(0);">Packages</a>
        <a onclick="hide_login_signup()" href="javascript:void(0);">Contact</a>

        <div class="login-signup">
            <a onclick="display_form()" id="login-signup-link" href="javascript:void(0);" style="float:right; border:solid 2px red; display: block;"> Login | Signup </a>
        </div>

        <div class="dropdown" style="display: block;">
            <button class="dropbtn"><?php session_start(); echo $_SESSION['login_user'];?>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">
                    <i class="fa fa-user-circle-o"></i>&nbsp;&nbsp;Profile</a>
                <a href="php_snippets/logout.php?logouttoken=true">
                    <i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout</a>
            </div>
        </div>
        <div class="cart">
            <a href="#" id="cart-link" style="float:right; display: block;">
                <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Shopping Cart</a>
        </div>
        
    </div>

    <!-- Read the guide section for better understanding of the city -->
    <div class="guide">
        <text style="color:white; font-weight:bold;">Want To Know More About This City</text>
        <a href="" style="margin-left:200px;">Guide</a>
        <a href="">Guide</a>
        <a href="">Guide</a>
        <a href="">Guide</a>
    </div>

    <!-- login/signup form -->
    <div id="overlay" onclick="close_form()">
        <div id="login" >
            <embed src="login.html" >
        </div>
    </div>
    <script src="scripting/loginform.js"></script>

    <!-- homepage image -->
    <div class="img-wrapper">
        <div class="caption" style="font-size:40px; font-weight:100;" >Kuala Lumpur</div>
        <div class="caption" style="margin-bottom:300px; font-size:25px; font-weight:100;">Malaysia's Most Iconic City</div>
        <img src="images/homepage/Kuala_Lumpur-home.jpg" alt="Kuala Lumpur" style="max-width:100%; overflow: hidden;">
    </div>
</body>
<?php include 'php_snippets/session.php'; ?>



</html>