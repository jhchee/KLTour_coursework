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
    <title>Package 3</title>
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
                    <img src="images/tour/31.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 8</div>
                    <img src="images/tour/32.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 8</div>
                    <img src="images/tour/33.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">4 / 8</div>
                    <img src="images/tour/34.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">5 / 8</div>
                    <img src="images/tour/35.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">6 / 8</div>
                    <img src="images/tour/36.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">7 / 8</div>
                    <img src="images/tour/37.jpg" style="width:100%">
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
                        <img class="demo cursor" src="images/tour/31.jpg" style="width:100%" onclick="currentSlide(1)" alt="Perdana Botanical Garden">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/32.jpg" style="width:100%" onclick="currentSlide(2)" alt="Perdana Botanical Garden">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/33.jpg" style="width:100%" onclick="currentSlide(3)" alt="Kuala Lumpur Bird Park">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/34.jpg" style="width:100%" onclick="currentSlide(4)" alt="Kuala Lumpur Bird Park">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/35.jpg" style="width:100%" onclick="currentSlide(5)" alt="Aquaria KLCC">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/36.jpg" style="width:100%" onclick="currentSlide(6)" alt="Aquaria KLCC">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/tour/37.jpg" style="width:100%" onclick="currentSlide(7)" alt="Zoo Negara">
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
    <h1>Kuala Lumpur Natural Tour</h1>
        <p>
            Immerse in one of the most popular in the world. Surrounded by heritage 
            culture that last more than 100 years.
        </p>
        <h2>Places</h2>
        <button class="collapsible">1. Perdana Botanical Garden</button>
        <div class="content">
            <h3>Perdana Botanical Garden</h3>
            <p>
                This attraction was formerly known as the Kuala Lumpur Lake Gardens 
                and the Taman Tasik Perdana. It is located in Heritage Park of Kuala 
                Lumpur forming an important green oasis in the urban jungle. The garden 
                was originally created as a recreational park in 1888 but later many 
                tropical plants were added and the park became a botanical garden. 
                Some areas of the gardens give visitors a sense of walking though a 
                tropical rainforest in the city center. A large lake sits at the heart 
                of the park and divides into two streams going further into the park. 
                You can find a forest tree collection, Plumeria tree collection, fernarium, 
                Zingiberales collection, Heliconia Garden, a collection of unusual plants, 
                a topiary, rare fruit tree collection, a sunken garden and an herb garden. 
                There is also a beautiful waterfall, fish ponds, conservatory, 
                Cycad Island, a deer park and orchid garden.
            </p>
        </div>
        <button class="collapsible">2. Kuala Lumpur Bird Park</button>
        <div class="content">
            <h3>Kuala Lumpur Bird Park</h3>
            <p>
                The place to see Malaysia’s amazing feathered friends is here at 
                Kuala Lumpur Bird Park. The park is set within a tropical paradise 
                in Lake Gardens Park . The park has the largest free-flight walk-through 
                aviary in the world and covers 20.9 acres. The park has various recreated 
                natural habitats for the different birds. The free-flight aviary has 
                lush rainforest vegetation and there are other mini-aviaries like the 
                Love Aviary with love birds; Brahminy Land home to Brahminy Kites birds 
                of prey; the Waterfall Aviary featuring a waterfall and water birds as well 
                as an Oriental Birds Aviary. The Flightless Birds section is home to 
                ostriches, emus and cassowary birds.
            </p>
        </div>
        <button class="collapsible">3. Aquaria KLCC</button>
        <div class="content">
            <h3>Aquaria KLCC</h3>
            <p>
                Located on the concourse level of the Kuala Lumpur Convention Centre in 
                the middle of the Golden Triangle, Aquaria KLCC houses some 5,000 aquatic 
                and marine creatures representing more than 150 species. 
                The 60,000-square-foot (5,574-square-meter) aquarium explores 
                the marine and freshwater flora and fauna of the Malaysian region and the world. 
                Highlights include a 295-foot (90-meter) glass tunnel with a moving walkway, 
                where visitors pass beneath giant stingrays, sand tiger sharks, 
                sea turtles and schools of fish, as well as a wave tank and simulated 
                glass bottom boat. Throughout the day, the oceanarium’s team of scuba 
                divers drop into the tanks for interactive animal feeding shows. 
                Those who want a closer look at the animals can sign up for Dive 
                with Sharks or Cage Rage experiences!
            </p>
        </div>
        <button class="collapsible">4. Zoo Negara</button>
        <div class="content">
        <h3>Zoo Negara</h3>
        <p>
            Zoo Negara was established in 1963 in Ampang, a town which is about 10-15 
            km away from the city of Kuala Lumpur. It has about 5,500 animals from over 
            400 species for you to discover. This place is a popular attraction for the 
            locals with small children especially during the weekends and public holidays. 
            Many parents with young children find it an educational place to bring their children. 
            The main attraction of the zoo is the Multi-Animal Show which is on twice 
            daily at 11am and 3pm. This show features performances from sea lions and other 
            animals at the open-air amphitheatre which is located near the Hornbill Centre. 
            Don't miss out!
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
