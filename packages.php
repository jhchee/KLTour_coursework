<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- include Bootstrap css and Js -->

    <!-- include Google font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- include Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- include personalised stylesheet -->
    <link rel="stylesheet" href="styling/style.css">
    <link rel="stylesheet" href="styling/packages.css">
    <!-- include personalised script -->
    <script src="scripting/loginform.js"></script>
    <title>Packages</title>
</head>

<body>

    <!-- navigation bar -->
    <div class="navbar">
        <a href="#" style="padding-right:60px;">
            <img src="images/KL Tour.png" alt="KLTour-logo" height="29" width="80">
        </a>
        <a href="homepage.php">Home</a>
        <a href="#" class="active">Packages</a>
        <a href="contact.php">Contact</a>

        <div class="login-signup">
            <a onclick="display_form()" id="login-signup-link" href="javascript:void(0);" style="float:right; border:solid 2px red; display: block;">
            Login | Signup </a>
        </div>

        <div class="dropdown" style="display: block;">
            <button class="dropbtn">
                <?php session_start(); echo $_SESSION['login_user'];?>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="profile.php">
                    <i class="fa fa-user-circle-o"></i>&nbsp;&nbsp;Profile</a>
                <a href="php_snippets/logout.php?logouttoken=true">
                    <i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout</a>
            </div>
        </div>
        <div class="cart">
            <a href="shoppingcart.php" id="cart-link" style="float:right; display: block;">
                <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Shopping Cart</a>
        </div>

    </div>
    <br>


    <!-- Read the guide section for better understanding of the city -->
    <div class="guide">
        <text style="color:white;">Know More About This City</text>
        <a href="guide1.php" style="margin-left:200px;">Attraction sites</a> 
        <a href="guide2.php">Restaurants</a>
        <a href="guide3.php">Hotels</a>
        <a href="guide4.php">Travel Info</a>
    </div>
    <div style="padding:1px;"></div>

    <!-- login/signup form -->
    <div id="overlay" onclick="close_form()">
        <div id="login">
            <embed src="login.html">
        </div>
    </div>
    <script src="scripting/loginform.js"></script>

    <div style="height:5%;"></div>
    
    <div class="card-group">
        <div class="card-box">
            <br>
            <div class="card">
                <div class="container">
                    <img src="http://placehold.it/200x200.jpg" alt="Avatar" class="image">
                    <div class="overlay2">
                        <div class="text">Hello World</div>
                    </div>
                    <a href="1.php" title = "click for more details">Find more</a>
                    <p style="float:left;">Hello</p>
                </div>
            </div>
        </div>
        <div class="card-box">
            <br>
            <div class="card">
                <div class="container">
                    <img src="http://placehold.it/200x200.jpg" alt="Avatar" class="image">
                    <div class="overlay2">
                        <div class="text">Hello World</div>
                    </div>
                    <a href="" title = "click for more details">Find more</a>
                    <p style="float:left;">Hello</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="card-group">
        <div class="card-box">
            <br>
            <div class="card">
                <div class="container">
                    <img src="http://placehold.it/200x200.jpg" alt="Avatar" class="image">
                    <div class="overlay2">
                        <div class="text">Hello World</div>
                    </div>
                    <a href="" title = "click for more details">Find more</a>
                    <p style="float:left;">Hello</p>
                </div>
            </div>
        </div>
        <div class="card-box">
            <br>
            <div class="card">
                <div class="container">
                    <img src="http://placehold.it/200x200.jpg" alt="Avatar" class="image">
                    <div class="overlay2">
                        <div class="text">Hello WorldHello WorldHello WorldHello WorldHello WorldHello WorldHello WorldHello WorldHello World</div>
                    </div>
                    <a href="" title = "click for more details">Find more</a>
                    <p style="float:left;">Hello</p>
                </div>
            </div>
        </div>
    </div>
    







    <!-- back to top button -->
    <button onclick="topFunction()" id="back-to-top" title="Go to top">
        <i class="fa fa-chevron-up"></i>
    </button>
</body>
<?php include 'php_snippets/session.php';?>



</html>