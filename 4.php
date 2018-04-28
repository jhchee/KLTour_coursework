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
    <!-- include css stylesheet-->
    <link rel="stylesheet" type="text/css" href="styling/1234.css">
    <!-- include styling aos -->
    <link rel="stylesheet" href="aos/aos.css">
    <!-- include personalised script -->
    <title>Home</title>
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
                    <img src="images/tour/41.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 8</div>
                    <img src="images/tour/42.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 8</div>
                    <img src="images/tour/43.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">4 / 8</div>
                    <img src="images/tour/44.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">5 / 8</div>
                    <img src="images/tour/45.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">6 / 8</div>
                    <img src="images/tour/46.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">7 / 8</div>
                    <img src="images/tour/47.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">8 / 8</div>
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
                        <img class="demo cursor" src="images/tour/41.jpg" style="width:100%" onclick="currentSlide(1)" alt="Suria KLCC">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/42.jpg" style="width:100%" onclick="currentSlide(2)" alt="Pavilion KL">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/43.jpg" style="width:100%" onclick="currentSlide(3)" alt="Pavilion KL">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/44.jpg" style="width:100%" onclick="currentSlide(4)" alt="TREC KL">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/45.jpg" style="width:100%" onclick="currentSlide(5)" alt="TREC KL">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/46.jpg" style="width:100%" onclick="currentSlide(6)" alt="Jalan Alor Food Hunt">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/47.jpg" style="width:100%" onclick="currentSlide(7)" alt="Jalan Alor Food Hunt">
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
            <h1>Modern Tour</h1>
            <h4 style="font-weight:100;">Price: RM 80</h4>
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
        <h1>Kuala Lumpur Modern tour!</h1>
    </div>
    <div class="box" data-aos="flip-left">
         <h3>Suria KLCC</h3>
        <p>
       Suria KLCC shopping centre is an imposing six-storey building at the foot 
       of the Petronas Twin Towers in Kuala Lumpur city centre. Created in 1999, 
       it was soon the talk of the town because it introduced a new level of 
       style to the city with its wide array of haute couture stores. 
       Despite its modern design, Suria KLCC features little touches reminiscent 
       of classic European malls, including plenty of greenery, white 
       geometric-patterned marble floors, with exposed glass panels that 
       let in natural light. Whilst some stores have high ceilings and huge arches 
       along with impressive columns, others have low ceilings and no arches 
       but plenty of their own stylish charm.
        </p>
    </div>
    <div class="box" data-aos="flip-up">
          <h3>Pavilion KL</h3>
        <p>
        Pavilion Kuala Lumpur is KL’s haute couture shopping Mecca. 
        It takes a lot to stand out in the city’s mallscape but this shopping centre, 
        which occupies prime real estate along Jalan Bukit Bintang, 
        does just that. Keeping the city’s fashionistas looking polished, 
        this KL staple is the perfect example of how extravagant some malls can be. 
        It features almost the same staggering square footage as Mid Valley Megamall 
        and 1 Utama and the 1.37 million-sqft white marble complex is a combination 
        of indoor and outdoor shopping venues. It resembles an oversized Grecian 
        temple with post modern pillars, but instead of torches and an altar with 
        a statue of Zeus, it houses over 450 snazzy stores. With hip dining options, 
        big-box retailers and access to both international designer labels and 
        local specialty retailers, Pavilion KL is a favourite among KL-ites. 
        Popular no matter the day of the week or time of day.
    </p>
    </div>
    <div class="box" data-aos="flip-right">
        <h3>TREC KL</h3>
        <p>
        TREC Kuala Lumpur (Taste, Relish Experience, Celebrate) is the city’s 
        largest entertainment centre, featuring an array of restaurants, 
        bars, pubs, lounges, cafes, and clubs under one roof. 
        Spanning over 28,000 square metres, this dining and nightlife hub is set along Jalan Tun Razak, 
        with expansive views of the Royal Selangor Golf Club, Petronas Twin Towers, and Menara KL Tower. 
        TREC Kuala Lumpur is also the new home of Asia’s most popular super nightclub Zouk KL. 
        Boasting 11 nightlife concepts under one roof, seasoned clubbers will recognise 
        some of Zouk KL’s original nightlife concepts such as Zouk Main Room, Phuture, and Velvet Underground, 
        as well as exclusive members’ areas, al fresco dining spaces, bars, 
        club rooms, lounges, and a balcony deck. Accessible within a ten-minute drive from Pavilion KL 
        and Starhill Gallery, read on to discover TREC Kuala Lumpur’s most popular nightlife and dining venues.
        </p>
    </div>
    <div class="box" data-aos="slide-right" id="anchoring_box">
        <h3>Jalan Alor Food Hunt</h3>
        <p>
        Hosting a lot of hawker stalls and seafood restaurants, 
        Jalan Alor is one of the most famous roads in Kuala Lumpur for food. 
        Located just behind Jalan Bukit Bintang and a short walk away from Changkat Bukit Bintang, 
        it is a favourite after-clubbing dining spot in the Golden Triangle area. 
        Though the seafood at the air-conditioned restaurants is really good and inexpensive, 
        we highly recommend the hawker food. KL being an immigrant city, 
        the variety of food available is amazing and in Jalan Alor the barbecued meats, 
        noodles and desserts are some of the best (and cheapest) in the city. Most of these 
        dishes cannot be found in fashion-conscious restaurants – and even if they are, 
        they are rarely as tasty, so hawker stalls are a favourite on the city’s foodie scene. 
        Called the cultural hearth of the city’s local cuisine, tourists 
        rarely venture here largely because of its ‘hidden’ location. 
        Definitely a must go spot for foodie!
        </p>
    </div>
</div>
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
    <div class="box"
        id="anchoring_box"
        data-aos="slide-left"
        data-aos-anchor="trigger-right">
        <button onclick="topFunction()" id="back-to-top" title="Go to top">
        <i class="fa fa-chevron-up"></i>
    </button>
    </div>

    <script src="aos/aos.js"></script>
<script type="text/javascript">
    AOS.init({
        duration:3000
    });
</script>


</body>

<script src="scripting/loginform.js"></script>
<?php include 'php_snippets/session.php';?>


</script>
</html>
