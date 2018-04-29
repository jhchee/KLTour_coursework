<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- include Google font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- include Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- include personalised stylesheet -->
    <link rel="stylesheet" href="styling/style.css">
    <link rel="stylesheet" href="styling/slideshow.css">
    <link rel="stylesheet" href="styling/productpackage.css">
    <title>Package 2</title>
</head>

<body>
    <!-- navigation bar -->
    <div class="navbar">
        <a href="#" style="padding-right:60px;">
            <img src="images/KL Tour.png" alt="KLTour-logo" height="29" width="80">
        </a>
        <a href="homepage.php">Home</a>
        <a href="packages.php" class="active">Packages</a>
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
    


        <!-- login/signup form -->
    <div id="overlay" onclick="close_form()">
        <div id="login">
            <embed src="login.html">
        </div>
    </div>

    <!-- food catalogue -->
    <div id="overlay-food" style="overflow:scroll;">
        <div class="food-form">
            <form action="php_snippets/createpackage.php" method="post" target="dummyframe">
                <div class="grid-container">
                    <div class="grid-item">
                        <img src="images/Food catalogue/Twisties.jpg" alt="food" style="height:200px; width:200px;">
                        <div class="card-container">
                            <h6>Twisties</h6>
                            <p>RM 1.20</p>
                            <div class="number-spinner">
                                <span class="ns-btn">
                                        <a data-dir="dwn"><span class="icon-minus"></span></a>
                                </span>
                                <input type="text" class="pl-ns-value" name="food[1]" value="0" maxlength=15>
                                <span class="ns-btn">
                                        <a data-dir="up"><span class="icon-plus"></span></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <img src="images/Food catalogue/London_choco_roll.jpg" alt="food" style="height:200px; width:200px;">
                        <div class="card-container">
                            <h6>London Choco Roll</h6>
                            <p>RM 1.60</p>
                            <div class="number-spinner">
                                <span class="ns-btn">
                                        <a data-dir="dwn"><span class="icon-minus"></span></a>
                                </span>
                                <input type="text" class="pl-ns-value" name="food[2]" value="0" maxlength=15>
                                <span class="ns-btn">
                                        <a data-dir="up"><span class="icon-plus"></span></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <img src="images/Food catalogue/Tiger_biscuits.jpg" alt="food" style="height:200px; width:200px;">
                        <div class="card-container">
                            <h6>Tiger Biscuit</h6>
                            <p>RM 2.60</p>
                            <div class="number-spinner">
                                <span class="ns-btn">
                                        <a data-dir="dwn"><span class="icon-minus"></span></a>
                                </span>
                                <input type="text" class="pl-ns-value" name="food[3]" value="0" maxlength=15>
                                <span class="ns-btn">
                                        <a data-dir="up"><span class="icon-plus"></span></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <img src="images/Food catalogue/Snickers.jpg" alt="food" style="height:70px; width:200px; margin-top:65px; margin-bottom:65px;">
                        <div class="card-container">
                            <h6>Snickers Bar</h6>
                            <p>RM 3.00</p>
                            <div class="number-spinner">
                                <span class="ns-btn">
                                        <a data-dir="dwn"><span class="icon-minus"></span></a>
                                </span>
                                <input type="text" class="pl-ns-value" name="food[4]" value="0" maxlength=15>
                                <span class="ns-btn">
                                        <a data-dir="up"><span class="icon-plus"></span></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <img src="images/Food catalogue/Kitkat.jpg" alt="food" style="height:200px; width:200px;">
                        <div class="card-container">
                            <h6>Kitkat</h6>
                            <p>RM 3.20</p>
                            <div class="number-spinner">
                                <span class="ns-btn">
                                        <a data-dir="dwn"><span class="icon-minus"></span></a>
                                </span>
                                <input type="text" class="pl-ns-value" name="food[5]" value="0" maxlength=15>
                                <span class="ns-btn">
                                        <a data-dir="up"><span class="icon-plus"></span></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <img src="images/Food catalogue/Mamee.jpg" alt="food" style="height:200px; width:200px;">
                        <div class="card-container">
                            <h6>Mamee Noodles</h6>
                            <p>RM 1.50</p>
                            <div class="number-spinner">
                                <span class="ns-btn">
                                        <a data-dir="dwn"><span class="icon-minus"></span></a>
                                </span>
                                <input type="text" class="pl-ns-value" name="food[6]" value="0" maxlength=15>
                                <span class="ns-btn">
                                        <a data-dir="up"><span class="icon-plus"></span></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <img src="images/Food catalogue/Rice_crackers.jpg" alt="food" style="margin-top:20px; margin-bottom:15px;height:170px; width:180px;">
                        <div class="card-container">
                            <h6>Rice Cracker</h6>
                            <p>RM 3.30</p>
                            <div class="number-spinner">
                                <span class="ns-btn">
                                        <a data-dir="dwn"><span class="icon-minus"></span></a>
                                </span>
                                <input type="text" class="pl-ns-value" name="food[7]" value="0" maxlength=15>
                                <span class="ns-btn">
                                        <a data-dir="up"><span class="icon-plus"></span></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <img src="images/Food catalogue/Lipton_green_tea.jpg" alt="food" style="margin-top:20px; margin-bottom: 20px; height:170px; width:180px;">
                        <div class="card-container">
                            <h6>Lipton Green Tea</h6>
                            <p>RM 2.70</p>
                            <div class="number-spinner">
                                <span class="ns-btn">
                                        <a data-dir="dwn"><span class="icon-minus"></span></a>
                                </span>
                                <input type="text" class="pl-ns-value" name="food[8]" value="0" maxlength=15>
                                <span class="ns-btn">
                                        <a data-dir="up"><span class="icon-plus"></span></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <img src="images/Food catalogue/Coca-cola.jpg" alt="food" style="margin-bottom:20px; margin-top: 20px; height:170px; width:170px;">
                        <div class="card-container">
                            <h6>Coca-cola</h6>
                            <p>RM 2.50</p>
                            <div class="number-spinner">
                                <span class="ns-btn">
                                        <a data-dir="dwn"><span class="icon-minus"></span></a>
                                </span>
                                <input type="text" class="pl-ns-value" name="food[9]" value="0" maxlength=15>
                                <span class="ns-btn">
                                        <a data-dir="up"><span class="icon-plus"></span></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <img src="images/Food catalogue/Mineral_water.jpg" alt="food" style="margin-top:20px; margin-bottom:20px; height:170px; width:170px;">
                        <div class="card-container">
                            <h6>Mineral Water</h6>
                            <p>RM 1.10</p>
                            <div class="number-spinner">
                                <span class="ns-btn">
                                        <a data-dir="dwn"><span class="icon-minus"></span></a>
                                </span>
                                <input type="text" class="pl-ns-value" name="food[10]" value="0" maxlength=15>
                                <span class="ns-btn">
                                        <a data-dir="up"><span class="icon-plus"></span></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <a id="close-food" onclick="emptyfood()">Close</a>
    </div>
    <!-- <script src="scripting/quantity.js"></script> -->

    <div style="margin-left: 10px;">
        
    <div class="info">
        <!-- slideshow -->
        <div class="slideshow">
            <!-- Container for the image gallery -->
            <div class="container">

                <!-- Full-width images with number text -->
                <div class="mySlides">
                    <div class="numbertext">1 / 8</div>
                    <img src="images/tour/21.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 8</div>
                    <img src="images/tour/22.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 8</div>
                    <img src="images/tour/23.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">4 / 8</div>
                    <img src="images/tour/24.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">5 / 8</div>
                    <img src="images/tour/25.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">6 / 8</div>
                    <img src="images/tour/26.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">7 / 8</div>
                    <img src="images/tour/27.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">8 /8</div>
                    <iframe width="99.9%" height="500" src="https://www.youtube.com/embed/Wc1C_egTh_c?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
                        <img class="demo cursor" src="images/tour/21.jpg" style="width:100%" onclick="currentSlide(1)" alt="Petaling street">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/22.jpg" style="width:100%" onclick="currentSlide(2)" alt="Petaling street">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/23.jpg" style="width:100%" onclick="currentSlide(3)" alt="Batu Caves">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/24.jpg" style="width:100%" onclick="currentSlide(4)" alt="Batu Caves">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/25.jpg" style="width:100%" onclick="currentSlide(5)" alt="Thean Hou Temple">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/26.jpg" style="width:100%" onclick="currentSlide(6)" alt="Thean Hou Temple">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/27.jpg" style="width:100%" onclick="currentSlide(7)" alt="Sri Maha Mariamman Temple">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="https://img.youtube.com/vi/Wc1C_egTh_c/hqdefault.jpg" style="width:100%" onclick="currentSlide(8)" alt="Verdict about Kuala Lumpur">
                    </div>
                </div>
            </div>
        </div>
        <script src="scripting/slideshow.js"></script>
        
        <div style="width:10%;"></div>
        <div class="product-detail">
            <h1>Cultural Tour</h1>
            <h4 style="font-weight:100;">Price: RM 90</h4>
            <div style="height:2px;"></div>
            <h3>Time</h3>

            <!-- form to create order -->
            <!-- <form action="php_snippets/createpackage.php" method="post"> -->
            <!-- time button -->
                <div class="group-item">
                    <ul>
                        <input type="radio" id="time1" name="package_time" value="0.1" required></input>
                        <label for="time1">0800</label>                    
                    </ul>
                    <ul>
                        <input type="radio" id="time2" name="package_time" value="0.2" required></input>                                 
                        <label for="time2">0900</label>  
                    </ul>
                    <ul>
                        <input type="radio" id="time3" name="package_time" value="0.3" required></input>                
                        <label for="time3">1000</label>  
                    </ul>
                </div>
                <div style="height:62px;"></div>  
                <div class="group-item" >
                    <ul>
                        <input type="radio" id="time4" name="package_time" value="0.4" required></input>
                        <label for="time4" style="padding-right:31px">1100</label>  
                    </ul>
                    <ul>
                        <input type="radio" id="time5" name="package_time" value="0.5" required></input>
                        <label for="time5">1300</label>  
                    </ul>
                    <ul>
                        <input type="radio" id="time6" name="package_time" value="0.6" required></input>                
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
    <iframe width="0" height="0" border="0" name="dummyframe" id="dummyframe" style="z-index:-999; position:absolute;"></iframe>
    <div style="height:600px;"></div>
    <div style="max-width: 55%;">
    <div class="box" data-aos="fade-right">
        <h1>Kuala Lumpur Cultural tour!</h1>
    </div>
    <div class="box" data-aos="flip-left">
    <p>
            Immerse in one of the most popular in the world. Surrounded by heritage 
            culture that last more than 100 years.
        </p>
        <h2>Places</h2>
        <button class="collapsible">1. Petaling street</button>
        <div class="content">
            <h3>Petaling street</h3>
            <p>
                Petaling Street is a famous shopping area in Kuala Lumpur’s China Town. 
                This is the place to come for great ethnic food, cheap eats, bargain 
                shopping, groceries, fresh produce, cheap clothing, unusual souvenirs 
                and interesting Chinese items. It is a shopaholic’s Mecca, not as 
                glamorous as a shopping mall but with much more character. Not only the 
                one street but the entire surrounding alleys and lanes are alive with stores 
                and pop up stalls. Shoppers are greeted by a traditional Chinese gate at the 
                entrance to the street. When shopping on Petaling Street remember to bargain 
                and that all that glitters is not gold!            
            </p>
        </div>
        <button class="collapsible">2. Batu Caves</button>
        <div class="content">
            <h3>Batu Caves</h3>
            <p>
                Explore the culture and traditions of Malaysia on this 
                three-hour Batu Caves tour from Kuala Lumpur. Spend the 
                afternoon visiting these famed natural caverns with your expert 
                local guide and wander the impressive grounds of the Batu Caves, 
                where you’ll gain insight and understanding of the religious 
                roots of this incredible and diverse nation. Drive through 
                Little India, learn about the art of batik and pewter smithing 
                and enjoy round-trip transportation and hotel pick up and drop off.
            </p>
        </div>
        <button class="collapsible">3. Thean Hou Temple</button>
        <div class="content">
            <h3>Thean Hou Temple</h3>
            <p>
                This ornate Chinese temple dedicated to the Queen of Heaven, 
                Thean Hou, protectorate of people who make their living from 
                the sea. The temple borrows from Buddhist, Taoist and Confucian 
                traditions. Some visitors believe the panoramic views of KL 
                alone make the trip up the hill worthwhile.
            </p>
        </div>
        <button class="collapsible">4. Sri Maha Mariamman Temple</button>
        <div class="content">
        <h3>Sri Maha Mariamman Temple</h3>
            <p>
                South of Jalan Hang Lekir, tucked away on Jalan Tun HS Lee, 
                is the extravagantly decorated Sri Mahamariamman Temple. 
                Incorporating Spanish and Italian tiles, precious stones 
                and gold in its design, KL’s main Hindu temple is an 
                incongruous sight situated between two Buddhist temples 
                at the edge of Chinatown. This large and elaborate Hindu 
                temple was founded by Tamil immigrants, from southern India, 
                who arrived in Malaya as contract labourers to build the 
                railways and roads or work in the rubber plantations. Construction 
                of the temple began in 1873 with plenty of ongoing restoration and 
                embellishment occurring over the years.
            </p>
        </div>
    </div>
</div>
    <div>
        <br><br>
    </div>
    <div id="snackbar">Added to cart</div>
    <script src="scripting/package.js"></script>
    <?php if(isset($_GET['Main_order_ID'])){
    echo '<script>',
     'var i = document.getElementById("addtocart");',
     'i.classList.add("changebutton");',
     'i.innerHTML="CHANGE PACKAGE";',
     'document.getElementById("action").innerHTML="Change";',
     'document.getElementById("snackbar").innerHTML="PACKAGE CHANGED";',
     '</script>';
} 
?>

    <!-- back to top button -->
    <button onclick="topFunction()" id="back-to-top" title="Go to top">
        <i class="fa fa-chevron-up"></i>
    </button>

</body>

<script src="scripting/loginform.js"></script>
<?php include 'php_snippets/session.php';?>


</script>
</html>
