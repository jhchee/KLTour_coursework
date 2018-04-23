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
        <a href="homepage.php">Home</a>
        <a href="packages.php">Packages</a>
        <a href="#" class="active">Contact</a>

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        .parallax {
            background-image: url('images/Contact/klcc_008.jpg');
            min-height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .caption {
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            text-align: center;
            color: #000;
        }

        .caption span.border {
            background-color: #111;
            color: #fff;
            padding: 18px;
            font-size: 40px;
            letter-spacing: 10px;
        }

        h3 {
            letter-spacing: 5px;
            text-transform: uppercase;
            font: 20px "Lato", sans-serif;
            color: #111;
        }

        h4 {
            letter-spacing: 3px;
            text-transform: uppercase;
            font: 18px "Lato", sans-serif;
            color: #787878;
        }


        @media only screen and (max-device-width: 1024px) {
            .parallax {
                background-attachment: scroll;
            }
        }
        .material-icons {
            font-size: 17px;
        }
    </style>
    </head>

    <body>
        <div style="height: 12px;"></div>
        <div class="parallax">
            <div class="caption">
                <span class="border">CONTACT US</span>
            </div>
        </div>

        <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align:center;">
            <h3 style="text-align:center;">We are here for you</h3>
            <br>
            <div>
                <h4 style="text-align:center;">
                    <i class="material-icons">pin_drop</i> Address</h4>
                <p style="color:#b4b4b4;">Wisma Superme 2nd, 3rd & 4th Floor,
                    <br> No.42-2 Jalan Sultan Ismail,
                    <br> 50250 Kuala Lumpur, Malaysia
                    <br>
                    <i>Coordinates : 2.9427° N, 101.8759° E</i>
                    <br>
                </p>
            </div>
            <div>
                <h4 style="text-align:center;">
                    <i class="material-icons">domain</i> Directory</h4>
                <p style="color:#b4b4b4;">
                    <b>2ND FLOOR - Food</b>
                    <br>
                    <br>
                    <i class="material-icons">phone</i> 03-2141 8250
                    <i class="material-icons">description</i> 03-2142 8029
                    <br>
                    <br>
                    <b>3RD FLOOR - Ticketing</b>
                    <br>
                    <br>
                    <i class="material-icons">phone</i> 03-2142 8026
                    <i class="material-icons">description</i> 03-2145 1423
                    <br>
                    <br>
                    <b>4TH FLOOR - Custom-made tours / Helping counter</b>
                    <br>
                    <br>
                    <i class="material-icons">phone</i> 03-2148 1778
                    <i class="material-icons">description</i> 03-2148 3818
                    <br>
                </p>
            </div>
            <div>
                <h4 style="text-align:center;">
                    <i class="material-icons">schedule</i> Working Hours</h4>
                <p style="color:#b4b4b4;">
                    <b>Monday - Friday</b> 09:00am - 06:00pm
                    <br>
                    <b>Saturday&nbsp;&nbsp;</b> 09:00am - 05:00pm
                    <br>
                    <b>Sunday and Public Holidays</b> Closed
                    <br>
                </p>
            </div>
        </div>

        <!-- login/signup form -->
        <div id="overlay" onclick="close_form()">
            <div id="login">
                <embed src="login.html">
            </div>
        </div>
        <script src="scripting/loginform.js"></script>


        <!-- back to top button -->
        <button onclick="topFunction()" id="back-to-top" title="Go to top">
            <i class="fa fa-chevron-up"></i>
        </button>
    </body>
    <?php include 'php_snippets/session.php';?>



</html>