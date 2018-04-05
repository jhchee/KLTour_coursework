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
    <link rel="stylesheet" href="styling/slideshow.css">
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
        <a href="package1.php" class="active">Packages</a>
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
    <br>
    <br>
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

    <!-- slideshow -->
    <div class="slideshow">
        <!-- Container for the image gallery -->
        <div class="container">
<!-- Thumbnail images -->
<div class="column">
        <div class="row">
            <img class="demo cursor" src="http://placehold.it/600x500.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
        </div>
        <div class="row"> 
            <img class="demo cursor" src="http://placehold.it/600x500.jpg" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
        </div>
        <div class="row">
            <img class="demo cursor" src="http://placehold.it/600x500.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
        </div>
        <div class="row">
            <img class="demo cursor" src="http://placehold.it/600x500.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
        </div>
        <div class="row">
            <img class="demo cursor" src="http://placehold.it/600x500.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
        </div> 
        <div class="row">
            <iframe width="100" height="80"
                src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe>
        </div>
        </div>
        </div>

            <!-- Full-width images with number text -->
            <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                <img src="http://placehold.it/600x500.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">2 / 6</div>
                <img src="http://placehold.it/600x500.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">3 / 6</div>
                <img src="http://placehold.it/600x500.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">4 / 6</div>
                <img src="http://placehold.it/600x500.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">5 / 6</div>
                <img src="http://placehold.it/600x500.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                <iframe width="600" height="500"
                    src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <!-- Image text -->
            <div class="caption-container">
            <p id="caption"></p>
            </div>
        
    </div>


    <script src="scripting/slideshow.js"></script>
    <!-- back to top button -->
    <button onclick="topFunction()" id="back-to-top" title="Go to top"><i class="fa fa-chevron-up"></i></button>
</body>
<?php include 'php_snippets/session.php';?>

</html>











    <!-- back to top button -->
    <button onclick="topFunction()" id="back-to-top" title="Go to top"><i class="fa fa-chevron-up"></i></button>
</body>
<?php include 'php_snippets/session.php';?>



</html>