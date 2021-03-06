<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Article: 10 Best Hotels in Kuala Lumpur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styling/guide2.css" />
    <!--Reference to Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--Reference to font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<!--Script APIs..-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripting/guide1.js"></script>
    <style>
        .parallax {
            background-image: url('images/Guides/interior.jpg');
            min-height: 500px; 
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;            
        }
    </style>
    <link rel="stylesheet" href="styling/style.css">

</head>
<body>
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
            <button class="dropbtn"><?php echo $_SESSION['login_user'];?>
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
        <div id="login" >
            <embed src="login.html" >
        </div>
    </div>
    <script src="scripting/loginform.js"></script>
    <div class="parallax">
        <div class="caption">
            <span class="border">10 BEST HOTELS IN KUALA LUMPUR</span>
        </div>
    </div>
    <div id="outercontent" class="container">
        <div class="row">
            <div class="content">
                <p>
                    <span>
                        The best hotels in KLCC offer not only easy access to some of the most recognised landmarks in Malaysia, but also countless options for dining, arts, culture, recreation, sightseeing, and shopping and entertainment. A popular tourist destination in the city centre, it’s home to the iconic Petronas Twin Towers, Menara KL Tower, and Suria KLCC Shopping Mall.
                    </span>
                </p>
                <p>
                    <span>
                        KLCC is also connected to various areas in Kuala Lumpur thanks to its convenient public bus and rail services. If you’re looking to enjoy some shopping and sightseeing, the vibrant Bukit Bintang district is accessible via a pedestrian bridge that connects Pavilion KL and Suria KLCC shopping malls. Read on to discover our picks of the most popular KLCC hotels, all offering award-winning restaurants and bars, excellent facilities and services, as well as stylish guestrooms and suites with spectacular views of the Malaysian capital.  
                    </span>
                </p>
                <div class="top10wrapper">
                    <!--1-->
                    <div class="top10itemwrapper">
                        <div class="itemheader">
                            <div class="itemheaderdetail">
                                <h1>
                                    Traders Hotel KL
                                </h1>
                                <p id="subtitle"><i>Rating: 4.5 star</i> @ Kuala Lumpur</p>
                            </div>
                            <div class="itemheaderpic">
                                <img src="images/Guides/thk.jpg">
                            </div>
                        </div>
                        <div class="itemdetail">
                            <div class="item_detail">
                                <p>
                                    <span>
                                        Traders Hotel Kuala Lumpur by Shangri-La is a five-star hotel located opposite Suria KLCC - with the Petronas Twin Towers and Kuala Lumpur Convention Centre flanking it.With an unbeatable location and business amenities such as free Wi-Fi, a business centre with secretarial service and five on-site meeting rooms, it is the perfect hotel for business and a great place to stay if you want to be in the thick of things.Leisure facilities are impressive - right in front of the 34-storey hotel is the KLCC Park, which hosts a 1.3km jogging track.Besides that the hotel has a pool, fully-equipped gym with sauna, a spa with five treatment rooms and three F&B venues (including Sky Bar, one of the citys premier rooftop bars).
                                    </span>
                                </p>
                                <p>
                                    <span>
                                        <i>Price from <strong style="color: maroon">USD 112</strong></i>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--2-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        Oasia Suites Kuala Lumpur
                                    </h1>
                                    <p id="subtitle"><i>Rating: 4.3 star</i> @ Kuala Lumpur</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/osk.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            A stay at Oasia Suites Kuala Lumpur places you in the heart of Kuala Lumpur, minutes from Kuala Lumpur Tower and close to Petronas Twin Towers.Featured amenities include dry cleaning/laundry services, a 24-hour front desk, and luggage storage.Free self parking is available onsite.
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <!--3-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        Grand Hyatt Kuala Lumpur
                                    </h1>
                                    <p id="subtitle"><i>Rating: 4.7 star</i> @ Kuala Lumpur</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/ghkl.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            For those who appreciate the finer things in life, look no further than Grand Hyatt Kuala Lumpur as your accommodation while in the city.Occupying a spot in the Golden Triangle, it is within walking distance to well-known city landmarks: Petronas Twin Towers, Kuala Lumpur Convention Centre and KLCC Park are all close by and Pavilion KL is connected via a covered sky-bridge outside the hotel.You can count on the Hyatt brand for a complete range of facilities, including a 24-hour fitness centre that is well-equipped with personal trainers, LCD screens and internet access, and the Essa Spa, fitted with 11 treatment rooms, Jacuzzi, steam, sauna and ice fountain rooms.
                                        </span>
                                    </p>
                                    <p>
                                        <span>
                                            <i>Price from <strong style="color: maroon">USD 151</strong></i>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <!--4-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        Mandarin Oriental Kuala Lumpur
                                    </h1>
                                    <p id="subtitle"><i>Rating: 4.7 star</i> @ Kuala Lumpur</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/mokl.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            With a stay at Mandarin Oriental Kuala Lumpur, you'll be centrally located in Kuala Lumpur, steps from Kuala Lumpur Convention Centre and minutes from Petronas Twin Towers.Featured amenities include a business center, limo/town car service, and express check-in.Event facilities at this hotel consist of conference space and meeting rooms. 
                                        </span>
                                    </p>
                                    <p>
                                        <span>
                                            <i>Price from <strong style="color: maroon">USD 163</strong></i>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <!--5-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        Shangri-La Hotel - Kuala Lumpur
                                    </h1>
                                    <p id="subtitle"><i>Rating: 4.6 star</i> @ Kuala Lumpur</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/slkl.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            Shangri-La Hotel Kuala Lumpurs sidewalk is shaded by a leafy canopy of green trees and once you are inside, it is evident why this is one of the citys most popular hotels: rich, inviting and warm are words that perfectly sum up its interior design.Subtle local touches are imbued into almost every aspect - from staff members scarlet and gold uniforms, traditional songket kebayas to the Malaysian greeting (a hand over the heart and a slight bow) that greets you at every turn.The pool has such a stunning close-up view of the PETRONAS Twin Towers that it almost feels like it is slotted in between the two blocks.
                                        </span>
                                    </p>
                                    <p>
                                        <span>
                                            <i>Price from <strong style="color: maroon">USD 125</strong></i>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <!--6-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        Impiana KLCC Hotel
                                    </h1>
                                    <p id="subtitle"><i>Rating: 4.1 star</i> @ Kuala Lumpur</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/ikh.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            Impiana KLCC is a 25-storey business hotel that is a great choice for those wanting to stay in the thick of things, with a pedestrian bridge connecting the hotel to Suria KLCC mall and the KL Convention Centre.Hotel facilities include an infinity swimming pool with views of the Petronas Twin Towers, a gym and onsite spa.A great place to wind down after a day exploring the city is the in-house rooftop restaurant - Cedar on 15 - which is an attraction in itself, overlooking the surrounding city skyline.Very business friendly, the property has four function rooms, a banquet hall and business centre with secretarial services.
                                        </span>
                                    </p>
                                    <p>
                                        <span>
                                            <i>Price from <strong style="color: maroon">USD 66</strong></i>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <!--7-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        DoubleTree by Hilton
                                    </h1>
                                    <p id="subtitle"><i>Rating: 4.3 star</i> @ Kuala Lumpur</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/dth.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            Doubletree by Hilton Hotel Kuala Lumpur brings first-class hospitality with a dash of friendliness to booming Kuala Lumpur.Located right in the middle of the Golden Triangle, the Petronas Twin Towers are just a stop away from the nearby LRT station, which can be reached by the covered pedestrian walkway from the hotel.The Makan Kitchen embraces the diversity of Malaysia and serves cuisines such as Malay, Iban, Nyonya, Kristang, Chinese and Indian using their live interactive kitchens, where you can watch the food preparation while you wait in their culturally-themed dining areas.Contemporary decor shines throughout the 540 guestrooms and suites, with amenities such as 32 LCD TVs, rain showers and high-speed broadband internet access.
                                        </span>
                                    </p>
                                    <p>
                                        <span>
                                            <i>Price from <strong style="color: maroon">USD 75</strong></i>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <!--8-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        The Face Suites Kuala Lumpur
                                    </h1>
                                    <p id="subtitle"><i>Rating: 4.5 star</i> @ Kuala Lumpur</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/tfs.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            A stay at The Face Suites Kuala Lumpur places you in the heart of Kuala Lumpur, minutes from Capital Square and close to Petronas Twin Towers.Featured amenities include dry cleaning/laundry services, a 24-hour front desk, and luggage storage.Free self parking is available onsite.
                                        </span>
                                    </p>
                                    <p>
                                        <span>
                                            <i>Price from <strong style="color: maroon">USD 154</strong></i>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <!--9-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        Hotel Maya Kuala Lumpur
                                    </h1>
                                    <p id="subtitle"><i>Rating: 3.7 star</i> @ Kuala Lumpur</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/hmkl.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            Ticking all the right boxes, we just cannot sing Hotel Mayas praises enough - first lets talk about its excellent location - just opposite the five-star property is super nightclub, Zouk KL, while just around the corner (a five-minute walk) is Suria KLCC.Stylish and chic, hotel amenities include a business centre with secretarial services, ballroom, six meeting rooms and five F&B venues.We especially love Sky Lounge, a bistro reserved exclusively for hotel guests, where you can enjoy complimentary drinks and snacks from 21:00 -23:00.Leisure facilities include an on-site spa (with six treatment rooms), an amazing hydrotherapy pool and a gym with scheduled yoga and Pilates classes. 
                                        </span>
                                    </p>
                                    <p>
                                        <span>
                                            <i>Price from <strong style="color: maroon">USD 69</strong></i>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <!--10-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        Corus Hotel Kuala Lumpur
                                    </h1>
                                    <p id="subtitle"><i>Rating: 3.9 star</i> @ Kuala Lumpur</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/chkl.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            Corus Hotel is a four-star property that is a short walk from the gleaming PETRONAS Twin Towers and right beside STAGE night club, resulting in a location that could not be any more strategic.It prides itself on its enviable location, but theres much more to love about Corus, with highlights including a constantly playing live pianist at the lobby who serenades guests as they walk in, day lounges right beside the swimming pool and on-going promotions of their specialty moon cakes.Besides being nearby to the node of the city, the renowned Twin Towers, Corus is also within walking distance to the KLCC LRT station and several significant business centres in the city, making it perfect for those who would like to conduct business in the morning and enjoy the city sights and sounds later on.
                                        </span>
                                    </p>
                                    <p>
                                        <span>
                                            <i>Price from <strong style="color: maroon">USD 64</strong></i>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- back to top button -->
    <button onclick="topFunction()" id="back-to-top" title="Go to top">
        <i class="fa fa-chevron-up"></i>
    </button>
    <?php include 'php_snippets/session.php';?>
</body>
</html>