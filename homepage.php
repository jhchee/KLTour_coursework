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
        <a href="#" class="active">Home</a>
        <a href="packages.php">Packages</a>
        <a href="contact.php">Contact</a>

        <div class="login-signup">
            <a onclick="display_form()" id="login-signup-link" href="javascript:void(0);" style="float:right; border:solid 2px red; display: block;"> Login | Signup </a>
        </div>

        <div class="dropdown" style="display: block;">
            <button class="dropbtn"><?php session_start(); echo $_SESSION['login_user'];?>
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
        <a href="" style="margin-left:200px;">Guide</a>
        <a href="">Guide</a>
        <a href="">Guide</a>
        <a href="">Guide</a>
    </div>
    <div style="padding:1px;"></div>

    <!-- login/signup form -->
    <div id="overlay" onclick="close_form()">
        <div id="login" >
            <embed src="login.html" >
        </div>
    </div>
    <script src="scripting/loginform.js"></script>

    <!-- homepage image -->
    <div class="img-wrapper">
    <img src="images/homepage/citycentre.jpg" alt="Kuala Lumpur" style="max-width:100%;">
        <div class="caption1">Kuala Lumpur</div>
        <div class="caption2">Malaysia's Most Iconic City<span class="blinking-cursor">|</span></div>
    </div>

    <div class="description1">
        <h1>Do You Know?</h1>
        <p>
        Kuala Lumpur is the capital city of Malaysia, boasting gleaming skyscrapers, 
        colonial architecture, charming locals, and a myriad of natural attractions. 
        Divided into numerous districts, its main hub is called the Golden Triangle which comprises 
        <b>Bukit Bintang</b>, <b>KLCC</b> and <b>Chinatown</b>. KL is widely recognised for numerous
         landmarks, including <b>Petronas Twin Towers</b> (the world’s tallest twin skyscrapers),
         <b>Petaling Street flea market</b>, and <b>Batu Caves</b>, which is over 400 million years
          old. With frequent sales events throughout the year, expansive shopping malls 
          like <b>Pavilion KL</b> and <b>Suria KLCC</b> are also among the biggest tourist attractions 
          in the city, hosting a wide range of upmarket labels from all over the world. 
          Plus, if you need more reason to love Kuala Lumpur, there is the abundance of 
          gastronomic delights – with thousands of hawker stalls, cafes, and restaurants 
          serving every imaginable type of delicacies. Not convinced yet? Read our 10 Must See and Do list!
        </p>
    </div>

    <div class="parallax-img"></div>
    <div class="blank"></div>
    <div class="parallax-img"></div>

    <div class="description1">
        <h1>What To Do?</h1>
        <p>
            The most popular and iconic attractions in Kuala Lumpur 
            have come to define the city as a tourist destination – 
            from the unmistakable outline of the <b>Petronas Twin Towers</b> to 
            the colossal standing Buddha image found outside <b>Batu Caves</b>. 
            However, Kuala Lumpur attractions comprise so much more for 
            those who want to look deeper into this fascinating city.....
            from the colourful <b>Petaling Street market</b> in <b>Chinatown</b> Kuala 
            Lumpur and the famous <b>Sultan Abdul Samad Building</b> in the city’s 
            colonial quarter, to the indoor <b>Aquaria KLCC oceanarium</b> 
            and <b>Petrosains Art Gallery</b> in <b>Suria KLCC</b>. There is a lot 
            of greenery in Kuala Lumpur, with the <b>Lake Gardens</b> home 
            to popular bird and deer parks you can freely visit, 
            or you can head to <b>i-City Shah Alam</b> to take cool 
            photos of its nightly colourful display of LED-lit 
            attractions. We have covered the traditional, popular 
            and unconventional Kuala Lumpur attractions on offer, 
            sorted by location and even theme, making it easy for 
            you to choose where to visit first.
        </p>
    </div>

    <div class="description1">
        <h1 style="text-align:middle;">Hear What They Said</h1>
    </div>



    <!-- back to top button -->
    <button onclick="topFunction()" id="back-to-top" title="Go to top"><i class="fa fa-chevron-up"></i></button>
</body>
<?php include 'php_snippets/session.php';?>



</html>