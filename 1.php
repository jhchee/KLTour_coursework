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
    <link rel="stylesheet" href="styling/productpackage.css">
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
            <a onclick="display_form()" id="login-signup-link" href="javascript:void(0);" style="float:right; border:solid 2px red; display: block;">
                Login | Signup </a>
        </div>

        <div class="dropdown" style="display: block;">
            <button class="dropbtn" type="button">
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
    


    <!-- login/signup form -->
    <div id="overlay" onclick="close_form()">
        <div id="login">
            <embed src="login.html">
        </div>
    </div>
    <script src="scripting/loginform.js"></script>

    <!-- food catalogue -->
    <div id="overlay-food" onclick="close_food()">
        <div class="food-form">
            <form action="php_snippets/createpackage.php" method="post" target="dummyframe">
                <!-- <div style="height:0%;"></div> -->
                <div class="grid-container">
                    <div class="grid-item">
                        <img class="food-pic" src="http://placehold.it/200x200.jpg" alt="food">
                        <label for="food4">food1</label>
                        <input type="number" id="food1" name="food1" value="0" min="0" max="5">
                        <button type="reset" value="Reset">Clear</button>
                    </div>
                    <div class="grid-item">
                        <img class="food-pic" src="http://placehold.it/200x200.jpg" alt="food">
                        <label for="food4">food2</label>
                        <input type="number" id="food2" name="food2" value="0" min="0" max="5">
                        <button type="reset" value="Reset">Clear</button>
                    </div>
                    <div class="grid-item">
                        <img class="food-pic" src="http://placehold.it/200x200.jpg" alt="food">
                        <!-- <div class="desciption"> -->
                        <label for="food4">food3</label>
                        <input type="number" id="food3" name="food3" value="0" min="0" max="5">
                        <!-- </div> -->
                        <button type="reset" value="Reset">Clear</button>
                    </div>
                    <div class="grid-item">
                        <img class="food-pic" src="http://placehold.it/200x200.jpg" alt="food">
                        <label for="food4">food4</label>
                        <input type="number" id="food4" name="food4" value="0" min="0" max="5">
                        <button type="reset" value="Reset">Clear</button>
                    </div>
                    <a id="close-food">OK</a>
                </div>
            <!-- </form> -->
        </div>
    </div>
    <!-- <script src="scripting/package.js"></script> -->


    <!-- food catalogue -->
    <div class="info">


        <!-- slideshow -->
        <div class="slideshow">
            <!-- Container for the image gallery -->
            <div class="container">

                <!-- Full-width images with number text -->
                <div class="mySlides">
                    <div class="numbertext">1 / 8</div>
                    <img src="http://placehold.it/1280x720.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 8</div>
                    <img src="http://placehold.it/1280x720.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 8</div>
                    <img src="http://placehold.it/1280x720.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">4 / 8</div>
                    <img src="http://placehold.it/1280x720.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">5 / 8</div>
                    <img src="http://placehold.it/1280x720.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">6 / 8</div>
                    <img src="http://placehold.it/1280x720.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">7 / 8</div>
                    <img src="http://placehold.it/1280x720.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">8 / 8</div>
                    <iframe width="823" height="462"
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

                <!-- Thumbnail images -->
                <div class="row">
                    <div class="column">
                        <img class="demo cursor" src="http://placehold.it/1280x720.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://placehold.it/1280x720.jpg" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://placehold.it/1280x720.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://placehold.it/1280x720.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://placehold.it/1280x720.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://placehold.it/1280x720.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://placehold.it/1280x720.jpg" style="width:100%" onclick="currentSlide(7)" alt="Snowy Mountains">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://placehold.it/1280x720.jpg" style="width:100%" onclick="currentSlide(8)" alt="Hello World">
                    </div>
                </div>
            </div>
        </div>
        <script src="scripting/slideshow.js"></script>
        
        <div style="width:10%;"></div>
        <div class="product-detail">
            <h1>Shopping Spree</h1>
            <h4 style="font-weight:100;">Price: RM 80</h4>
            <div style="height:2px;"></div>
            <h3>Time</h3>

            <!-- form to create order -->
            <!-- <form action="php_snippets/createpackage.php" method="post"> -->
            <!-- time button -->
                <div class="group-item">
                    <ul>
                        <input type="radio" id="time1" name="package_time" value="0.1"></input>
                        <label for="time1">0800</label>                    
                    </ul>
                    <ul>
                        <input type="radio" id="time2" name="package_time" value="0.2"></input>                                 
                        <label for="time2">0900</label>  
                    </ul>
                    <ul>
                        <input type="radio" id="time3" name="package_time" value="0.3"></input>                
                        <label for="time3">1000</label>  
                    </ul>
                </div>
                <div style="height:62px;"></div>  
                <div class="group-item" >
                    <ul>
                        <input type="radio" id="time4" name="package_time" value="0.4"></input>
                        <label for="time4" style="padding-right:31px">1100</label>  
                    </ul>
                    <ul>
                        <input type="radio" id="time5" name="package_time" value="0.5"></input>
                        <label for="time5">1300</label>  
                    </ul>
                    <ul>
                        <input type="radio" id="time6" name="package_time" value="0.6"></input>                
                        <label for="time6">1400</label>  
                    </ul>
                </div>
                <div style="height:60px;"></div>
                <h3>Meal</h3>
                <div class="meal-button" style="margin-left:74px;">
                    <ul>
                        <input type="radio" id="with-meal" name="package_meal" value="1"></input>
                        <label for="with-meal">Yes</label>  
                    </ul>
                    <ul>
                        <input type="radio" id="without-meal" name="package_meal" value="0" checked="checked"></input>                
                        <label for="without-meal">No</label>  
                    </ul>
                </div>
                <div style="height:60px;"></div>
                <h3>Add to cart</h3>
                <button type="submit" class="cart-submit" onclick="showSnackbar()">ADD TO CART</button>

            </form>
        </div>
    </div>
    <!-- <iframe width="0" height="0" border="0" name="dummyframe" id="dummyframe" style="z-index:-999; position:absolute;"></iframe> -->
    <div style="height:600px;"></div>
    <div style="max-width: 55%;">
        <h1>Places</h1>
        <p>hellovgefgfhbdsugfbhsdbfhj
            fjkdsfslidkbfjlk
            vhjsdbhjkbsdhkjvbhksdvbhsdbvhj
            bsdhfvhjbsdjhkvbsdfhkjvbhjdfsb
            bhvsdbhubshvbashjfgjsgfjsaghfgsahlfg
            hjfgashlgfjsgfjlsgafhgsdhjlagfas
            uifgwiasgfusagfjlhsg
        </p>

        <h1>Description</h1>
        <p>hellovgefgfhbdsugfbhsdbfhj
            fjkdsfslidkbfjlk
            vhjsdbhjkbsdhkjvbhksdvbhsdbvhj
            bsdhfvhjbsdjhkvbsdfhkjvbhjdfsb
            bhvsdbhubshvbashjfgjsgfjsaghfgsahlfg
            hjfgashlgfjsgfjlsgafhgsdhjlagfas
            uifgwiasgfusagfjlhsg
        </p>

        <h1>What can you do</h1>
        <p>hellovgefgfhbdsugfbhsdbfhj
            fjkdsfslidkbfjlk
            vhjsdbhjkbsdhkjvbhksdvbhsdbvhj
            bsdhfvhjbsdjhkvbsdfhkjvbhjdfsb
            bhvsdbhubshvbashjfgjsgfjsaghfgsahlfg
            hjfgashlgfjsgfjlsgafhgsdhjlagfas
            uifgwiasgfusagfjlhsg
        </p>
    </div>
    <p>hellovgefgfhbdsugfbhsdbfhj
            fjkdsfslidkbfjlk
            vhjsdbhjkbsdhkjvbhksdvbhsdbvhj
            bsdhfvhjbsdjhkvbsdfhkjvbhjdfsb
            bhvsdbhubshvbashjfgjsgfjsaghfgsahlfg
            hjfgashlgfjsgfjlsgafhgsdhjlagfas
            uifgwiasgfusagfjlhsg
        </p>


    <div id="snackbar">Added to cart</div>
    <script src="scripting/package.js"></script>


    
    <!-- back to top button -->
    <button onclick="topFunction()" id="back-to-top" title="Go to top">
        <i class="fa fa-chevron-up"></i>
    </button>
</body>
<?php include 'php_snippets/session.php';?>

</html>











<!-- back to top button -->
<button onclick="topFunction()" id="back-to-top" title="Go to top">
    <i class="fa fa-chevron-up"></i>
</button>
</body>
<?php include 'php_snippets/session.php';?>



</html>