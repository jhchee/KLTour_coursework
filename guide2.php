<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Article: 10 Best Restaurant In Kuala Lumpur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Reference to font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!--Script APIs..-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripting/guide1.js"></script>
    <!--CSS Files-->
    <link rel="stylesheet" href="styling/guide2.css">
    <style>
        .parallax {
            background-image: url('images/Guides/pood.jpg');
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
     <!-- navigation bar -->
     <div class="navbar">
        <a href="#" style="padding-right:60px;">
            <img src="images/KL Tour.png" alt="KLTour-logo" height="29" width="80">
        </a>
        <a href="homepage.php" class="active">Home</a>
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
            <span class="border">10 BEST RESTAURANTS IN KUALA LUMPUR</span>
        </div>
    </div>
    <div id="outercontent" class="container">
        <div class="row">
            <div class="contain">
                <p>
                    <span>
                        Our list of the 10 Best Kuala Lumpur Restaurants encompasses chic dining rooms with award-winning cuisine, and efficient service teams in the kitchen and on the floor. Seriously next-level stuff, below you will find a list of the current hot picks in the city’s culinary scene.
                    </span>
                </p>
                <p>
                    <span>
                        The clear intention of the players at these restaurants is to dazzle diners by putting out menus that will live long in the memory. On the cutting edge of culinary innovation, these dining rooms are leading the pack in KL’s dining scene; take a look at our choice of the best places to eat in Kuala Lumpur and pick your special place for tonight.
                    </span>
                </p>
                <div class="top10wrapper">
                    <!--1-->
                    <div class="top10itemwrapper">
                        <div class="itemheader">
                            <div class="itemheaderdetail">
                                <h1>
                                    Marini’s On 57
                                </h1>
                                <p id="subtitle">KLCC</p>
                            </div>
                            <div class="itemheaderpic">
                                <img src="images/Guides/m.jpg">
                            </div>
                        </div>
                        <div class="itemdetail">
                            <div class="item_detail">
                                <p>
                                    <span>
                                        An exclusive Italian ristorante on the 57th floor of PETRONAS Tower 3 (adjacent to Suria KLCC), Marini’s on 57 is a fine dining Kuala Lumpur restaurant offering gorgeous, up-close views of the iconic PETRONAS Twin Towers through its floor-to-ceiling windows and glass roof. Comprising a restaurant, bar and lounge, its décor is elegant and restrained, and the kitchen offers a menu of haute Italian cuisine, with standout dishes such as spaghetti with botargo (mullet roe) and almonds.
                                    </span>
                                </p>
                                <button class="b1" id="b1-1">Show Detail</button>
                                <p id="p1">
                                    <i>Opening Hours: Mon - Thu 19:00 - 23:00, Fri - Sun 18:30 - 24:00 <br>Address: Level 57, Menara 3 Petronas, Persiaran KLCC, 50088 Kuala Lumpur <br>Tel: +603 2386 6030 or +6017 688 0167</i>
                                </p>
                                <div id="p1">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.764049551929!2d101.70928901450033!3d3.15679895398653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d6a1404a63%3A0x43d1d096750ebaa4!2sMarini&#39;s+On+57+%7C+Rooftop+Bar+%26+Italian+Restaurant!5e0!3m2!1sen!2smy!4v1524467952437" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    <br>
                                </div>
                                <button class="b1" id="b1-2">Hide Detail</button>
                            </div>
                        </div>
                    </div>
                    <!--2-->
                    <div class="top10itemwrapper">
                        <div class="itemheader">
                            <div class="itemheaderdetail">
                                <h1>
                                    Troika Sky Dining
                                </h1>
                                <p id="subtitle">KLCC</p>
                            </div>
                            <div class="itemheaderpic">
                                <img src="images/Guides/tsd.jpg">
                            </div>
                        </div>
                        <div class="itemdetail">
                            <div class="item_detail">
                                <p>
                                    <span>
                                        Offering two fine dining restaurants (fusion-focused Cantaloupe and Italian bistro Strato), the impressive Troika Sky Dining unquestionably stands out from the pack. Set on the 23rd floor of Tower B of The Troika along Persiaran KLCC, it goes without saying that the cloud-skimming views here are something else entirely. However, the food is what helped put it on our list of Top 10 Kuala Lumpur Restaurants 2014 – Cantaloupe serves award-winning French, Italian, Greek and Spanish food, while Strato has an assertive and adventurous menu of high end pizzas and pastas.
                                    </span>
                                </p>
                                <button class="b2" id="b2-1">Show Detail</button>
                                <p id="p2">
                                    <i>Opening Hours: 12:00 – 15:00 and 18:00 – 23:00 (Strato); 16:00 – 01:00 (Claret); 18:30 – 22:30 (Cantaloupe Dining Room) <br>Address: Level 23A, Tower B, The Troika, 19 Persiaran KLCC, 50450 KL <br>Tel: +603 2162 0886</i>
                                </p>
                                <div id="p2">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7608766627823!2d101.71599371450034!3d3.157626253981654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d1d7fddcc3%3A0xfb3baf76fe660b25!2sFuego%2C+Troika+Sky+Dining!5e0!3m2!1sen!2smy!4v1524469683598" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    <br>
                                </div>
                                <button class="b2" id="b2-2">Hide Detail</button>
                            </div>
                        </div>
                    </div>
                    <!--3-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        Thirty8 KL
                                    </h1>
                                    <p id="subtitle">KLCC</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/38.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            An unbeatable dining room, wine bar and lounge on the 38th floor of Kuala Lumpur’s Grand Hyatt Hotel, Thirty8 KL is a market focused temptation to local and visiting gourmet enthusiasts. Offering a diverse menu of Chinese and Thai seafood, Japanese sushi and sashimi and steaks, the elegant eatery is clearly one of the city’s best restaurants. Everything on the menu is excellent but we are fans of the flawless symphony of fresh sushi and sashimi. Upscale yet inviting, polished yet unpretentious, large wraparound windows offer spectacular views of the prominent PETRONAS Twin Towers.
                                        </span>
                                    </p>
                                    <button class="b3" id="b3-1">Show Detail</button>
                                    <p id="p3">
                                        <i>Opening Hours: 12:00 – 15:00 & 18:00 – 23:00 <br>Address: Level 38, 12 Jalan Pinang, Kuala Lumpur <br>Tel: +603 2182 1234</i>
                                    </p>
                                    <div id="p3">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7757348600726!2d101.7102184145004!3d3.1537502540044544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d4634284a3%3A0x22f83ea0df9251a9!2sTHIRTY8+Restaurant%2C+Bar+%26+Lounge!5e0!3m2!1sen!2smy!4v1524470217904" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                                        
                                        <br>
                                    </div>
                                    <button class="b3" id="b3-2">Hide Detail</button>
                                </div>
                            </div>
                        </div>
                    <!--4-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        Enak Restaurant KL
                                    </h1>
                                    <p id="subtitle">Bukit Bintang</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/erk.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            Specialising in spicy Malay food, Enak Restaurant KL is one of the city’s most famous high-end Malay restaurants. Sitting unpretentiously on the lower ground floor of Starhill Gallery mall, the restaurant’s décor is elaborate with Balinese-style tables, candlelight and polished antique brassware. Relying heavily on age-old family recipes, the food at this halal (pork-free) restaurant has such a rich, home-made flavour to it and while the spice levels are just perfect for locals, diners can also request that the kitchen tone down the chilli factor to appease mellower taste buds.
                                        </span>
                                    </p>
                                    <button class="b4" id="b4-1">Show Detail</button>
                                    <p id="p4">
                                        <i>Opening Hours: 12:00 – 01:00 <br>Address: LG2, Feast Floor, Starhill Gallery, 181 Jalan Bukit Bintang, 55100 Kuala Lumpur <br>Tel: +603 2141 8973</i>
                                    </p>
                                    <div id="p4">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15935.102365539653!2d101.70365232238726!3d3.153787704563859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc362968fa3697%3A0x501f4ad0235f2813!2sEnak+Kl!5e0!3m2!1sen!2smy!4v1524470553148" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                                        
                                        <br>
                                    </div>
                                    <button class="b4" id="b4-2">Hide Detail</button>
                                </div>
                            </div>
                        </div>
                    <!--5-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        Prego KL
                                    </h1>
                                    <p id="subtitle">Bukit Bintang</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/rkl.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            Set within The Westin Kuala Lumpur Hotel, Prego KL is an uptown homage to classic Italian cuisine. The two-storey restaurant’s menu provides multiple opportunities for a memorable meal, best experienced when shared between two or more. Décor-wise the dining space features a lot of old world charm, while the kitchen offers sophisticated takes on Italian comfort food favourites. For example, risotto with a velvety sauce of wild mushrooms and parmesan cheese, and delicate ravioli filled with tender chicken chunks, sitting on a bed of rich mushroom cream sauce.
                                        </span>
                                    </p>
                                    <button class="b5" id="b5-1">Show Detail</button>
                                    <p id="p5">
                                        <i>Opening Hours: 12:00 - 14:30 (lunch) and 18:30 - 22:30 (dinner) Monday - Saturday; 12:00 - 15:00 (lunch) and 18:30 - 22:30 (dinner) Sunday <br>Address: 199, The Westin Kuala Lumpur, Jalan Bukit Bintang, Kuala Lumpur, 55100 <br>Tel: +603 2731 8333</i>
                                    </p>
                                    <div id="p5">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.797262159654!2d101.71225161450042!3d3.148126054037499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc362c465c8ec7%3A0x42078b1feaf3100a!2sPrego+Italian+Restaurants+Sdn.+Bhd.!5e0!3m2!1sen!2smy!4v1524471063464" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                                        
                                        <br>
                                    </div>
                                    <button class="b5" id="b5-2">Hide Detail</button>
                                </div>
                            </div>
                        </div>
                    <!--6-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        Celestial Court KL
                                    </h1>
                                    <p id="subtitle">Jalan Sultan Ismail</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/cck.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            Offering innovative, halal Cantonese food, Celestial Court KL – set in Sheraton Imperial Hotel KL – ticks all the right boxes with a spacious venue of majestic elegance, presenting sweeping views of the nightclubs along Asian Heritage Row just opposite. When it comes to the food, the kitchen crew have truly blown the competition out of the water, with signature dishes such as honey-spiced roasted rack of lamb with sweet beans in Mongolian sauce, and sautéed sea tiger prawns with minced garlic and shallots.
                                        </span>
                                    </p>
                                    <button class="b6" id="b6-1">Show Detail</button>
                                    <p id="p6">
                                        <i>Opening Hours: Monday – Saturday: 12:00 – 14:30 & 18:30 – 22:30; Sunday & Public Holidays: 10:00 – 14:30 & 18:30 – 22:30 <br>Address: Jalan Sultan Ismail, 50250 Kuala Lumpur <br>Tel: +603 2717 9988</i>
                                    </p>
                                    <div id="p6">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.755888796767!2d101.69772231450047!3d3.1589263539740293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc482f20ac978d%3A0x346a3579b1d37ca9!2sCelestial+Court!5e0!3m2!1sen!2smy!4v1524471287747" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        <br>
                                    </div>
                                    <button class="b6" id="b6-2">Hide Detail</button>
                                </div>
                            </div>
                        </div>
                    <!--7-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        Marble 8 on 56
                                    </h1>
                                    <p id="subtitle">KLCC</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/m8.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            Marble 8 on 56 is hailed as a haven for affluent steak-lovers, offering the finest cuts of Wagyu and Angus beef in Kuala Lumpur city centre. Set within a five-minute walk from the KLCC LRT station, this steakhouse shares a space with Nobu Kuala Lumpur, offering a combination of a fine-dining eatery and stylish bar. Patrons can opt for the elegant indoor dining area, which is fitted with polished wooden flooring, unobtrusive instrumental music, plush leather sofas, and a massive tree as the centrepiece. However, we highly recommend reserving a table by the floor-to-ceiling window, where you can enjoy a night view of the Petronas Twin Towers and KL city skyline.
                                        </span>
                                    </p>
                                    <button class="b7" id="b7-1">Show Detail</button>
                                    <p id="p7">
                                        <i>Opening Hours: Lunch - 12 pm to 2.30 pm, last call 2.15 pm; Dinner - 7 pm to 11 pm, last call 10.45 pm <br>Address: Level 56, Petronas Tower 3, Persiaran KLCC, Kuala Lumpur <br>Tel: +603 2386 6030</i>
                                    </p>
                                    <div id="p7">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.764459094396!2d101.70979631450041!3d3.156692153987171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d206472245%3A0x9846c3311eeb0307!2sMarble+8+%7C+Steak+House+%26+Fine+Dining+Restaurant+in+KL!5e0!3m2!1sen!2smy!4v1524471586203" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        <br>
                                    </div>
                                    <button class="b7" id="b7-2">Hide Detail</button>
                                </div>
                            </div>
                        </div>
                    <!--8-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        Nobu KL
                                    </h1>
                                    <p id="subtitle">KLCC</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/nkl.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            A Michelin-starred titan in the world of sushi, sashimi and tempura, Nobu is a Japanese restaurant known all over the world for its unique food that blends Asian and South American (specifically Peruvian) flavours. There are more than 29 franchises over the globe, and Nobu KL is Southeast Asia’s first branch. Set just one floor below Marini’s on 57 in Menara PETRONAS 3, the halal Nobu KL offers 360 degree KL skyline views, including up-close sights of the PETRONAS Twin Towers. 
                                        </span>
                                    </p>
                                    <button class="b8" id="b8-1">Show Detail</button>
                                    <p id="p8">
                                        <i>Opening Hours: 18:00 – 23:00 <br>Address: Level 56, Menara 3 Petronas, Persiaran KLCC, 50088 Kuala Lumpur <br>Tel: +60 3 2164 5084</i>
                                    </p>
                                    <div id="p8">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7756647519764!2d101.71322161450038!3d3.15376855400434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d6a6e2d101%3A0xff573f34e99f4599!2sNobu+Kuala+Lumpur!5e0!3m2!1sen!2smy!4v1524471842603" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        <br>
                                    </div>
                                    <button class="b8" id="b8-2">Hide Detail</button>
                                </div>
                            </div>
                        </div>
                    <!--9-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        Prime KL
                                    </h1>
                                    <p id="subtitle">KL Sentral</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/pkl.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            A welcome treat for carnivores, Prime KL is an excellent steakhouse in Le Meridien Hotel that has been a consistent winner with numerous local food awards. The menu is full of hearty and generously portioned offerings, making it a favourite haunt with families. While their steaks deserve star billing, the menu at Prime KL does not just encompass halal-certified beef – there are also classic western dishes such as seared sea scallops, Caesar salad, clam chowder and more. 
                                        </span>
                                    </p>
                                    <button class="b9" id="b9-1">Show Detail</button>
                                    <p id="p9">
                                        <i>Opening Hours: 12:00 – 23:00 Monday – Friday; 18:30 – 23:00 weekends <br>Address: Level 5, Le Meridien Kuala Lumpur, 2 Jalan Stesen Sentral, KL <br>Tel: +603 2263 7888</i>
                                    </p>
                                    <div id="p9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.8451474427957!2d101.68432361450043!3d3.1355794541109536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49c05464fca5%3A0x8f55a48d79427608!2sPRIME+Kuala+Lumpur!5e0!3m2!1sen!2smy!4v1524472069222" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        <br>
                                    </div>
                                    <button class="b9" id="b9-2">Hide Detail</button>
                                </div>
                            </div>
                        </div>
                    <!--10-->
                    <div class="top10itemwrapper">
                            <div class="itemheader">
                                <div class="itemheaderdetail">
                                    <h1>
                                        Maison Francais Restaurant
                                    </h1>
                                    <p id="subtitle">Changkat Bukit Bintang</p>
                                </div>
                                <div class="itemheaderpic">
                                    <img src="images/Guides/mfk.jpg">
                                </div>
                            </div>
                            <div class="itemdetail">
                                <div class="item_detail">
                                    <p>
                                        <span>
                                            Set in a converted three-storey mansion along Jalan Changkat Kia Peng, Maison Francaise (French House) is a French fine-dining restaurant with a romantic, vintage feel. There is a classic Rolls Royce parked in the driveway out front and the interior design of the restaurant is classy with white walls, terrazzo floors, modern crystal chandeliers and white tablecloth-covered tables.
                                        </span>
                                    </p>
                                    <p>
                                        <span>
                                            The place is divided into three areas: upstairs is a private cigar lounge, while the ground floor houses the main dining hall which has a patio that overlooks a garden and has views of KLCC. Also on the ground floor is an al fresco dining section surrounding a swimming pool: here, there is a cocktail bar and lounge chairs and tables under a canopy of trees, fairy lights threaded through the greenery and a view to the stars.
                                        </span>
                                    </p>
                                    <button class="b10" id="b10-1">Show Detail</button>
                                    <p id="p10">
                                        <i>Opening Hours: 12:00 – 24:00 <br>Address: 5 Jalan Changkat Kia Peng, KL <br>Tel: +603 2144 1474</i>
                                    </p>
                                    <div id="p10">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.785399754871!2d101.71294291450042!3d3.1512264540192896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d32ba9f38d%3A0x9b9bb4e89fa65f62!2sMaison+Fran%C3%A7aise+%5BFrench+House%5D!5e0!3m2!1sen!2smy!4v1524472557072" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        <br>
                                    </div>
                                    <button class="b10" id="b10-2">Hide Detail</button>
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