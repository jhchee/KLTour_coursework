<?php
    session_start(); 
?>

<html>
<head>
    <title>Article: 10 Best Attractions In Kuala Lumpur</title>
    <!--Reference to Icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Reference to font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!--Script APIs..-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        div {
            display: block;
        }
        .parallax {
            background-image: url('images/Guides/KL.jpg');
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
	        background-color:rgb(168, 21, 21);
            color:#fff;
            padding:18px;
            font-size:40px;
            font-family: 'Lato', sans-serif;
            letter-spacing:10px;
            opacity: 50%;
            }

        /* content */
        .row {
            margin-left: -15px;
            margin-right: -15px;
        }

        .content {
            width: 100%;
            padding-left:15px;
            padding-right:15px;
        }

        .container {
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15px;
        }

        /* top10 */
        .top10wrapper .top10itemwrapper {
            display: block;
        }

        .top10itemwrapper {
            padding: 4%;
            margin-bottom: 3%;
            margin-left: 1px;
            margin-right: 2px;
            box-shadow: 1px 1px 2px 1px rgba(50,50,50,0.2);
        }

        /* img */
        .itemheaderpic img {
            width:100%;
            height: 100%;
            vertical-align: middle;
            object-fit: contain;
            margin-top: -140px;
            margin-bottom: -140px;  
        }

        /* text */
        h1 {
            display: block;
            letter-spacing: 0;
            font-weight: 900;
        }

        h2 {
            display: block;
            margin: 30px 0px 15px;
            font-size: 24px;
            -webkit-margin-before: 1em;
            -webkit-margin-after: 1em;
            -webkit-margin-start: 0px;
            -webkit-margin-end: 0px;
            font-family: 'Montserrat', sans-serif;
            color: #2B3E51;
            font-weight: 700;
            letter-spacing: 0;
        }
        
        #subtitle {
            margin-top: -15px;
            color:rgb(97, 93, 93);
        }

        #p1,#b1-2,#p2,#b2-2,#p3,#b3-2,#p4,#b4-2,#p5,#b5-2,#p6,#b6-2,#p7,#b7-2,#p8,#b8-2,#p9,#b9-2,#p10,#b10-2 {
            display: none;
        }

        /* button */
        button {
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .b1,.b2,.b3,.b4,.b5,.b6,.b7,.b8,.b9,.b10 {
            background-color: white;
            color: black;
            border: 2px solid #e7e7e7;
        }

        .b1:hover,.b2:hover,.b3:hover,.b4:hover,.b5:hover,.b6:hover,.b7:hover,.b8:hover,.b9:hover,.b10:hover {
            background-color: #e7e7e7;
            color: white;
        }

        /* restrictions */
        @media only screen and (min-width: 768px) {
            .row {
                font-family: 'Montserrat', sans-serif;
                font-size: 18px;
                line-height: 1.89;
                }
            }
        
        @media (min-width: 992px) {
            #outercontent {
                width: 750px;
            }
        }

        @media only screen and (min-width: 768px) {
            .h1 {
                font-size: 32px;
                font-weight: 500;
                margin-top: 42px;
                line-height: 1.1;
                text-align: left;
                color: #2B3E51;
                /* margin-bottom: 35px; */
            }
        }

    </style>
    <link rel="stylesheet" href="styling/style.css">
</head>
<body>
     <!-- navigation bar -->
     <div class="navbar">
            <a href="#" style="padding-right:60px;">
                <img src="images/KL Tour.png" alt="KLTour-logo" style="height:29px; width:80px;">
            </a>
            <a href="homepage.php" class="active">Home</a>
            <a href="packages.php">Packages</a>
            <a href="contact.php">Contact</a>
    
            <div class="login-signup">
                <a onclick="display_form()" id="login-signup-link" href="javascript:void(0);" style="float:right; border:solid 2px red; display: block;"> Login | Signup </a>
            </div>
    
            <div class="dropdown" style="display: block;">
                <button class="dropbtn">
                <?php echo $_SESSION['login_user'];?>
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
                <embed src="login.html">
            </div>
        </div>
        <script src="scripting/loginform.js"></script>
    <div class="parallax">
        <div class="caption">
            <span class="border">10 BEST ATTRACTIONS IN KUALA LUMPUR</span>
            </div>
        </div>
    <div id="outercontent" class="container">
            <div class="row">
                    <div class="content">
                        <p>
                            <span>
                                This list of 10 best things to do in Kuala Lumpur should be included in any traveller’s itinerary. It comprises the city’s most iconic landmarks, both natural and manmade, and showcases the best KL has to offer. The Malaysian capital is known for its multicultural community, which mainly consists of Malay, Indian, and Chinese residents. As a result, you’ll find vibrant events and festivities celebrated throughout the year, while local markets and religious sites offer a glimpse into the local culture and lifestyle.
                            </span>
                        </p>
                        <p>
                            <span>
                                When visiting a destination, some things you can do without, while others are considered the essence of a place. So we decided to compile a comprehensive guide of Kuala Lumpur’s best attractions - making the cut are world famous iconic landmarks like the Petronas Twin Towers, religious hotspots like Batu Caves, as well as culturally enriching streets markets and botanical gardens.
                            </span>
                        </p>
                        <div class="top10wrapper">
                            <div class="top10itemwrapper">
                                <div class="itemheader">
                                    <div class="itemheaderdetail">
                                        <h1>
                                            Petronas Twin Towers
                                        </h1>
                                        <p id="subtitle">KLCC</p>                                     
                                    </div>
                                    <div class="itemheaderpic">
                                        <img src="images/Guides/petronas-twin-towers.jpg">
                                    </div>
                                </div>
                                <div class="itemdetail">
                                    <div class="item_detail">
                                        <p>
                                            <span>
                                                Petronas Twin Towers were once the tallest buildings in the world. Now the world’s tallest twin structures, the 88-storey buildings were designed by Cesar Pelli & Associates with both towers joined at the 41st and 42nd floors (175m above street level) by a 58 metre-long, double-decker Sky Bridge.
                                            </span>
                                        </p>
                                        <button class="b1" id="b1-1">Show More</button>
                                        <h2 id="p1">
                                            Fun For Everyone
                                        </h2>
                                        <p id="p1">
                                            <span>
                                                    Stretching out to the side of the Petronas Twin Towers is the spacious and beautifully landscaped KLCC Park which features a jogging track, walking paths, a water fountain and a wading pool for children. 
                                            </span>
                                        </p>
                                        <p id="p1">
                                            <span>
                                                    Besides the mall and park, the Petronas Twin Towers has a host of other attractions including the Petronas Art Gallery and Kuala Lumpur Convention Centre. Plus the Petrosains Science Centre is here set inside Suria KLCC: it is an interactive science discovery centre showcasing exhibits related to the petroleum industry, from petroleum’s origin in the age of the dinosaurs to its latest oil-based products.
                                            </span>
                                        </p>
                                        <h2 id="p1">
                                                Classical Tour de force
                                        </h2>
                                        <p id="p1">
                                            <span>
                                                    Another one of the Petronas Twin Towers' most notable features is the Dewan Filharmonik Petronas concert hall, Southeast Asia’s leading venue for classical music. Located in between the two towers, the architectural design of the facility, which has earned praise as one of the world’s best concert halls, is based upon the time-honoured design of 19th century European concert halls. The concert hall has played host to some of the world’s most respected musical talents and is home to the Malaysian Philharmonic Orchestra.
                                            </span>
                                        </p>
                                        <h2 id="p1">
                                            A View From Above
                                        </h2>
                                        <p id="p1">
                                            <span>
                                                    Set on Level 86 is Petronas Twin Towers' observation deck, where visitors can get a closeup view of the tower's spire as well as digital displays and exhibit of the tower's history.
                                            </span>
                                        </p>
                                        <p id="p1">
                                            <span>
                                                    The double-decked Skybridge at the Petronas Twin Towers is one of its major draws as it offers amazing views of the city. Apart from allowing tenants of the towers to move from one building to the other without having to go to ground level, the Skybridge also functions as an emergency exit route.
                                            </span>
                                        </p>
                                        <p id="p1">
                                            <span>
                                                    Do note a pass is required to enter the bridge, so make sure to get there early as queues can be long.
                                            </span>
                                        </p>
                                        <p id="p1">
                                            </br>
                                            <span>
                                                    <i>Opening Hours: 09:00 – 19:00 (closed for Friday prayers 13:00 – 14:30)</br>Location: Near Concorde Hotel Monorail stop, in between Jalan Ampang and Jalan Raja Chulan</i>
                                            </span>
                                        </p>
                                        <button class="b1" id="b1-2">Show Less</button>
                                        <script src="scripting/guide1.js"></script>
                                    </div>
                                </div>
                            </div>
                            <div class="top10itemwrapper">
                                    <div class="itemheader">
                                        <div class="itemheaderdetail">
                                            <h1>
                                                Menara KL Tower
                                            </h1>
                                            <p id="subtitle">Jalan P.Ramlee</p>                                     
                                        </div>
                                        <div class="itemheaderpic">
                                            <img src="images/Guides/menarakl.jpg">
                                        </div>
                                    </div>
                                    <div class="itemdetail">
                                        <div class="item_detail">
                                            <p>
                                                <span>
                                                        Along with the Petronas Twin Towers, Menara KL Tower is easily Malaysia’s most recognizable and popular landmark. Constructed in 1994, the tower stands at 421 metres and effortlessly trumps the Petronas Twin Towers with the highest and most spectacular view of the city. This gleaming tower’s spindle-like apex is visible from almost anywhere in Kuala Lumpur.
                                                </span>
                                            </p>
                                            <button class="b2" id="b2-1">Show More</button>
                                            <p id="p2">
                                                <span>
                                                    Menara KL’s viewing deck is, at 276 metres, at least 100 metres higher than the Petronas Twin Towers’ Skybridge; the view is marvellous during the day and even better at night when you can see the entire sparkling city centre.
                                                </span>
                                            </p>
                                            <p id="p2">
                                                <span>
                                                    The tower is erected atop the Bukit Nanas (Pineapple Hill) Forest Reserve – the oldest gazetted forest reserve in the country, which houses age-old trees as well as flora and fauna indigenous to Malaysia’s tropical climate. Primarily used as a communications infrastructure, it is the fifth-tallest telecommunications tower in the world.
                                                </span>
                                            </p>
                                            <p id="p2">
                                                <span>
                                                    When it was originally built, the natural surroundings of Bukit Nanas were kept intact to ensure balance in development; in fact a 100-year-old Jelutong tree was preserved, at great cost, by building a retaining wall around it.
                                                </span>
                                            </p>
                                            <p id="p2">
                                                <span>
                                                    When Menara KL Tower was constructed the overall design was meant to represent the human journey for perfection in life. The tower’s architectural-style reflects Malaysia’s vibrant Islamic heritage with Arabic scripts, Islamic tiles, and archetypal Islamic floral and abstract patterns.
                                                </span>
                                            </p>
                                            <p id="p2">
                                                <span>
                                                    The structure has ‘Muqarnas’ – a type of corbel used as a decorative device in traditional Islamic and Persian architecture – underscoring its design as homage to the revival of Islamic architectural heritage. The main lobby of the upper ground floor is decorated with exquisite glass-clad domes that sparkle like giant diamonds; the tower’s familiar globular pinnacle is inspired by a Malaysian spinning top.
                                                </span>
                                            </p>
                                            <h2 id="p2">
                                                Revolving Atmosphere 360 restaurant at Menara KL Tower
                                            </h2>
                                            <p id="p2">
                                                <span>
                                                    Hailed as one of the tallest freestanding structures in the world, Menara KL plays host to a revolving restaurant, Atmosphere 360. You can have a meal or enjoy high tea along with the most spectacular view of the city centre, bar chartering a helicopter. Boasting a theatre, an amphitheatre, beautiful cascading pools, a fast food restaurant and souvenir shops, this tower is a definite must-see sightseeing attraction when you visit Kuala Lumpur.
                                                </span>
                                            </p>
                                            <p id="p2">
                                                </br>
                                                <span>
                                                        <i>Opening Hours: Daily 09:00 - 22:00 </br>Address: Jalan Puncak, Off Jalan P. Ramlee, Kuala Lumpur City Centre Tel: +603 2020 5444</i>
                                                </span>
                                            </p>
                                            <button class="b2" id="b2-2">Show Less</button>
                                            <script src="scripting/guide1.js"></script>
                                        </div>
                                    </div>
                                </div>
                                <div class="top10itemwrapper">
                                        <div class="itemheader">
                                            <div class="itemheaderdetail">
                                                <h1>
                                                    Chinatown
                                                </h1>
                                                <p id="subtitle">Jalan Petaling</p>                                     
                                            </div>
                                            <div class="itemheaderpic">
                                                <img src="images/Guides/ps.jpg">
                                            </div>
                                        </div>
                                        <div class="itemdetail">
                                            <div class="item_detail">
                                                <p>
                                                    <span>
                                                        At the heart of Kuala Lumpur is an area which never sleeps, and far more colourful and bustling than its bigger and more glamourous neighbours, KLCC & Bukit Bintang. Chinatown, based in Petaling Street, is also known as 'Chee Cheong Kai' (Starch Factory Street), a reference to its roots as a tapioca-producing district. Deeply immersed in Oriental culture, heritage and history, Chinatown is undoubtedly one of the most popular tourist spots in Malaysia.
                                                    </span>
                                                </p>
                                                <button class="b3" id="b3-1">Show More</button>
                                                <p id="p3">
                                                    <span>
                                                            Chinatown is also a well-known bargain hunter’s paradise, a place where you can find all sorts of stuff from Chinese herbs to imitation goods. At night, its main market area, Petaling Street, transforms into a lively and vibrant night market, filled with hundreds of stalls offering all kinds of goods at dirt-cheap prices.
                                                        </span>
                                                </p>
                                                <h2 id="p3">
                                                    Chinatown Attractions
                                                </h2>
                                                <p id="p3">
                                                    <span>
                                                            Chinatown’s biggest attraction is perhaps the rows and rows of stalls selling all types of merchandise from food to clothing at bargainable prices. But look further and you will find that there’s more to Chinatown than fake branded goods.
                                                        </span>
                                                </p>
                                                <p id="p3">
                                                    <span>
                                                        Just around the corner from this paradise of bargains are temples that have been around for more than a century. Built in 1873, the Sri Mahamariamman Temple is the oldest and most elaborately-designed Hindu temple in the country, while Chan See Shu Yuen Temple and Kuan Ti Temple are fine examples of Oriental architecture with open courtyards, symmetrical pavillions and embellished roofs.
                                                    </span>
                                                </p>
                                                <h2 id="p3">
                                                        Chinatown Restaurants
                                                    </h2>
                                                <p id="p3">
                                                    <span>
                                                        Chinatown is practically filled with Chinese restaurants and hawker stalls selling all sorts of delicacies from steamed buns to seafood. Almost everywhere you look, a Chinese restaurant greets your eyes, the glorious smells wafting from its kitchen beckoning you to come inside and sample what’s cooking.
                                                    </span>
                                                </p>
                                                <p id="p3">
                                                    <span>
                                                        But those are not the only things you can find here; there are many more popular delicacies that are unique to Chinatown and can’t be found anywhere else in the city. What’s best about these places is that they are all open until late at night, well into the wee hours of the morning.
                                                    </span>
                                                </p>
                                                <h2 id="p3">
                                                    Chinatown Nightlife
                                                </h2>
                                                <p id="p3">
                                                    <span>
                                                        The nightlife in Chinatown is in a league of its own; it’s not about rows of clubs, pubs and bars offering music-and-alcohol-fuelled entertainment, but the extra colour that seems to grow more vibrant at night, lighting up Petaling Street and its surroundings. The Reggae Bar and The Beatles Bar are situated just across the road from each other, offering a laid-back environment to chill out in.
                                                    </span>
                                                </p>
                                                <p id="p3">
                                                    <span>
                                                        Chinatown’s night market serves as the area’s main attraction – even bigger and more happening than during the daytime – giving you a kind of nightlife that is quite different from what you may be used to. Soak in the atmosphere of this legendary night market as you trawl the rows of shops and stalls in what is deemed the mother of all night markets.
                                                    </span>
                                                </p>
                                                <h2 id="p3">
                                                    Chinatown Shopping
                                                </h2>
                                                <p id="p3">
                                                    <span>
                                                        Chinatown’s most well-known shopping area is undoubtedly located along the stretch of road called Petaling Street. Marked by a huge, green awning sheltering shoppers from rain and daytime heat, the street is practically stocked to the brim with shops and stalls along it offering all kinds of goods at dirt-cheap prices, from fake branded fashion items to delicious hawker food. The best thing is, the prices can be brought lower still as haggling is the way of life here.
                                                    </span>
                                                </p>
                                                <p id="p3">
                                                    <span>
                                                        But besides Petaling Street, there are also quite a number of shopping centres around Chinatown, with three malls and a touristy bazaar called ‘Central Market’ (Pasar Seni) serving the area, which, although not as grand and glamourous as their counterparts in the city’s more upmarket areas, offer plenty of good bargains within its walls. Aside from Petaling Street market and shopping malls, there are plenty of independent shops dotted all over Chinatown.
                                                    </span>
                                                </p>
                                                <h2 id="p3">
                                                    Chinatown Activities
                                                </h2>
                                                <p id="p3">
                                                    <span>
                                                        Believe it or not, there are more to Chinatown than hunting for bargains and shopping ‘til you drop. Chinatown is practically littered with foot massage parlours and foot reflexology centres. There is one in every corner, claiming to be the best in town. They’re not only strategically placed, but also reasonably priced as well, making it convenient for visitors to just drop in for a much-needed pampering for their tired feet after a long day hunting for bargains.
                                                    </span>
                                                </p>
                                                <p id="p3">
                                                    <span>
                                                        Alternatively, you can simply take a walk around, preferably with a camera in hand, taking in the sights, sounds and smells of Kuala Lumpur in its most raw form – unbridled and unpretentious.
                                                    </span>
                                                </p>    
                                                <p id="p3">
                                                    </br>
                                                    <span>
                                                        <i>Location :</i>
                                                        </br>
                                                        <div id="p3" style="object-fit: contain;">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.815206374452!2d101.6955910435933!3d3.1434302850177955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49d045f188c9%3A0x63b8766a36ded25c!2sJalan+Petaling%2C+City+Centre%2C+50000+Kuala+Lumpur%2C+Wilayah+Persekutuan+Kuala+Lumpur!5e0!3m2!1sen!2smy!4v1524400743850" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                        </div>
                                                    </span>
                                                </p>
                                                <button class="b3" id="b3-2">Show Less</button>
                                                <script src="scripting/guide1.js"></script>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 4 -->
                            <div class="top10itemwrapper">
                                    <div class="itemheader">
                                        <div class="itemheaderdetail">
                                            <h1>
                                                Batu Caves
                                            </h1>
                                            <p id="subtitle">Batu Caves</p>                                     
                                        </div>
                                        <div class="itemheaderpic">
                                            <img src="images/Guides/bc.jpg">
                                        </div>
                                    </div>
                                    <div class="itemdetail">
                                        <div class="item_detail">
                                            <p>
                                                <span>
                                                    Batu Caves, one of Kuala Lumpur’s most frequented tourist attractions, is a limestone hill comprising three major caves and a number of smaller ones. Located approximately 11 kilometres to the north of Kuala Lumpur, this 100-year-old temple features idols and statues erected inside the main caves and around it. Incorporated with interior limestone formations said to be around 400 million years old, the temple is considered an important religious landmark by Hindus. 
                                                </span>
                                            </p>
                                            <button class="b4" id="b4-1">Show More</button>
                                            <p id="p4">
                                                <span>
                                                    Cathedral Cave – the largest and most popular cavern in Batu Caves – houses several Hindu shrines beneath its 100-metre-high arched ceiling. At the foot of Batu Hill are two other cave temples – the Art Gallery Cave and Museum Cave – which houses numerous Hindu statues and paintings. 
                                                </span>
                                            </p>
                                            <h2 id="p4">
                                                Batu Caves during Thaipusam
                                            </h2>
                                            <p id="p4">
                                                <span>
                                                    Batu Caves is the focal point of the annual Hindu festival of Thaipusam, which attracts thousands of devotees and visitors. Usually held at the end of January, the procession begins on the evening before the Thaipusam Festival at the Sri Mariamman Temple in KL city centre. 
                                                </span>
                                            </p>
                                            <p id="p4">
                                                <span>
                                                    The procession more often than not, arrives at Batu Caves in the wee hours of the morning the next day; the entire celebration commences then and is a colourful event that lasts a total of eight hours. In the past the festival has attracted more than one million pilgrims, making it one of the largest gatherings in the world. 
                                                </span>
                                            </p>
                                            <h2 id="p4">
                                                Kavadis
                                            </h2>
                                            <p id="p4">
                                                <span>
                                                    Many disciples carry their offerings – containers of milk – to the Lord Muruga on large, brightly decorated ‘kavadis’. Kavadis are two huge semicircular ornate pieces of wood or steel which are bent and attached to a cross structure that can be balanced on the shoulders. These frameworks are also usually combined with various metal hooks and skewers which are used to pierce the skin, cheeks and tongue. The kavadi is decorated with flowers and peacock feathers and some can weigh up to as much as 100 kilos. 
                                                </span>
                                            </p>
                                            <p id="p4">
                                                <span>
                                                    Some disciples also fulfil vows that they have made to the Gods by having their bodies pierced by hooks, needles and even skewers and visitors are often fascinated by the dedication of devotees. 
                                                </span>
                                            </p>
                                            <p id="p4">
                                                <span>
                                                    The truly amazing feat is when followers begin the arduous climb up the 272 steps to the top of the caves – the trek requires a stunning amount of endurance as they often have to work against the press of the bustling masses. Priests wait at the top to sprinkle consecrated ash over the hooks and skewers piercing the devotees flesh before they are removed. 
                                                </span>
                                            </p>
                                            <p id="p4">
                                                </br>
                                                <span>
                                                    <i>Opening Hours: Daily, 06:00 - 21:00 </br>Address: Batu Caves, Sri Subramaniam Temple, Kuala Lumpur, Malaysia </br>Tel: +603 2287 9422 </br>How to get there: </br>13km north of Kuala Lumpur. </br>Take Intrakota bus No 11D from the Central Market or the Cityliner bus No 69 at Jalan Pudu to get to Batu Caves. Taxis are also available anywhere around city.</i>
                                                </span>
                                            </p>
                                            <button class="b4" id="b4-2">Show Less</button>
                                            <script src="scripting/guide1.js"></script>
                                        </div>
                                    </div>
                                </div>
                            <!--5-->
                            <div class="top10itemwrapper">
                                    <div class="itemheader">
                                        <div class="itemheaderdetail">
                                            <h1>
                                                Sultan Abdul Samad Building
                                            </h1>
                                            <p id="subtitle">Kuala Lumpur</p>                                     
                                        </div>
                                        <div class="itemheaderpic">
                                            <img src="images/Guides/sasb.jpg">
                                        </div>
                                    </div>
                                    <div class="itemdetail">
                                        <div class="item_detail">
                                            <p>
                                                <span>
                                                    The Sultan Abdul Samad Building is among Kuala Lumpur’s earliest Moorish-style buildings. It is set to the east of Merdeka Square (Dataran Merdeka) and the Royal Selangor Club, across from Jalan Sultan Hishamuddin. It was built in 1897 and was named after the reigning sultan of Selangor at the time.
                                                </span>
                                            </p>
                                            <button class="b5" id="b5-1">Show More</button>
                                            <p id="p5">
                                                <span>
                                                    The distinguished landmark originally served as the secretariat for the colonial British administration. Designed by AC Norman, the architect responsible for Masjid Jamek (Jamek Mosque), the historically-significant building used to house the superior courts of Malaysia: the Federal Court of Malaysia, the Court of Appeals and the High Court of Malaya, before they moved to Putrajaya.
                                                </span>
                                            </p>
                                            <h2 id="p5">
                                                Sultan Abdul Samad Building’s Design
                                            </h2>
                                            <p id="p5">
                                                <span>
                                                    Sultan Abdul Samad Building is now home to the Ministry of Information, Communications and Culture of Malaysia and sits beside the old KL Railway Station. Though it no longer serves an official purpose, it remains one of the city’s most important tourist attractions and a historical landmark in the city. 
                                                </span>
                                            </p>
                                            <p id="p5">
                                                <span>
                                                    Constructed entirely of brick, the building features strong gothic, western and Moorish-style influences with an imposing porch, graceful arches, curved colonnades topped with shiny copper cupolas and a domineering 41.2m- high clock tower. It is frequently seen as the backdrop for Malaysia’s annual Independence Day parades (which take place past Dataran Merdeka).
                                                </span>
                                            </p>
                                            <h2 id="p5">
                                                Good to Know
                                            </h2>
                                            <p id="p5">
                                                <span>
                                                    The Sultan Abdul Samad Building remains an enduring attraction amidst a rapidly changing city skyline. There are several more structures in this area (to the east of Dataran Merdeka) designed by both Anthony C. Norman and A.B. Hubbock: these clusters of buildings form a large part of KL’s Colonial Core and provide a striking counterpoint to the looming Menara KL and stylish PETRONAs Twin Towers.
                                                </span>
                                            </p>
                                            <p id="p5">
                                                <span>
                                                    Behind the Sultan Abdul Samad Building you’ll find the confluence of the Klang River and Gombak River, as well as Masjid Jamek (Jamek Mosque): a mosque of similar design by the same architect. Sultan Abdul Samad Building is easy to get to: the Pasar Seni or Masjid Jamek LRT station is just a short walk away (10 minutes) plus several buses run routes past the building.
                                                </span>
                                            </p>
                                            <p id="p5">
                                                </br>
                                                <span>
                                                    <i>Address: Jalan Tun Perak (across from Dataran Merdeka on Jalan Sultan Hishamuddin)</br>How to get there: </br>Take the LRT and alight at Masjid Jamek station. This building is 10 minutes walk from the station. You will not miss it because there are many good signages to guide you to this place.</i>
                                                </span>
                                            </p>
                                            <button class="b5" id="b5-2">Show Less</button>
                                            <script src="scripting/guide1.js"></script>
                                        </div>
                                    </div>
                                </div>
                            <!-- 6 -->
                            <div class="top10itemwrapper">
                                    <div class="itemheader">
                                        <div class="itemheaderdetail">
                                            <h1>
                                                Sunway Lagoon Theme Park
                                            </h1>
                                            <p id="subtitle">Petaling Jaya</p>                                     
                                        </div>
                                        <div class="itemheaderpic">
                                            <img src="images/Guides/sltp.JPG">
                                        </div>
                                    </div>
                                    <div class="itemdetail">
                                        <div class="item_detail">
                                            <p>
                                                <span>
                                                    Sunway Lagoon Theme Park is located in Petaling Jaya – a thriving satellite town – about 15km southwest of the Kuala Lumpur city centre. With a variety of watery rides on offer and plenty of dry-land activities too, there are few more fun ways to spend a day than cooling down at Sunway.
                                                </span>
                                            </p>
                                            <button class="b6" id="b6-1">Show More</button>
                                            <p id="p6">
                                                <span>
                                                    Water slides that whirl and twirl, a manmade ‘river’ ride, a surf beach, a wave pool, a 360° revolving pirate ship… the list of fun attractions at the 80-acre park is extensive. Built on the site of a former tin mine and quarry, when it first opened the highlights of this multi-zone theme park were its water slides and the world’s largest manmade surf beach. These days, it has expanded and encompasses a total of five different zones – the water park, Scream Park, Amusement Park, Extreme Park and Wildlife Park.
                                                </span>
                                            </p>
                                            <h2 id="p6">
                                                Waters of Africa
                                            </h2>
                                            <p id="p6">
                                                <span>
                                                    Sunway Lagoon’s water park, the Waters of Africa ‘playground’, is its most popular zone. Malaysia’s first surf simulator, the FlowRider, sees the most action; here, surfers can show off their skills and it is frequently used for competitions while surfing and body-boarding sessions are held at weekends at the wave pool. Other popular rides include the Congo Challenge – a six-lane water slide that achieves speeds of up to 40kmph – while thrill-seekers will love to spin around in the loops of the African Pythons before they’re spat out of the gigantic tubes. Another ride for daredevils is the Cameroon Climb. Here, two riders swoop down from a height of 15m in double tubes and shoot up and down till they come to a standstill. Kids are also well-catered for – especially noteworthy is Little Zimbabwe, an interactive water playground built to resemble an African village complete with huts and Masai warriors guarding the entrance.
                                                </span>
                                            </p>
                                            <h2 id="p6">
                                                Scream Park
                                            </h2>
                                            <p id="p6">
                                                <span>
                                                    Sunway Lagoon’s newest addition, Lynton V. Hariss’ Scream Park is home to everything that goes bump in the night. It’s extremely popular due to its ‘after-hours’ feel – lots of scare zones, a vampire-centric horror theatre (Pontianak Theatre of Fear) and a ghost house (Rumah Hantu in 3DX). The most iconic movie monsters are brought to life at Horrorwood Studios – an exhibit where you can traverse through the world’s biggest zombie apocalypse landscape and also meet Freddy, Billy, Jason and other unforgettable characters. Those looking for a little post-Judgment Day fun can arm up with high-tech weaponry and face off against the elite Cyberdyne Systems Corporation battle squads in an interactive game of laser tag within SkyNet’s booby-trapped battle arena at the TerminatorX: A Laser Battle for Salvation attraction. There’s also a ‘Night at the Museum’ attraction, an exhibit of Larry’s pals within a replica of the famous movie’s museum gallery.
                                                </span>
                                            </p>
                                            <h2 id="p6">
                                                Amusement Park
                                            </h2>
                                            <p id="p6">
                                                <span>
                                                    Comprising the Wild Wild West and World of Adventure zones, the Amusement Park is where all the heart-stopping adventure takes place. Populated by ‘cowboys’ and ‘red Indians’, the western frontier section has the standard thrill rides and an interactive wildlife zoo where you can stroke giant tortoises and cuddle hamsters. Perfect for kids, adults are kept occupied with the Grand Canyon Rapid Falls (where you sit on inner tubes and swirl down the 350m river). For those looking to get a kick, the Niagra Falls Flume Ride is the attraction to head to – you’re seated in a ‘log’ that’s dropped down a steep hill into a 260m-long river.
                                                </span>
                                            </p>
                                            <p id="p6">
                                                <span>
                                                    Excitement is the name of the game at the World of Adventure. There’s an enclosure with majestic Bengal tigers but if you’re in the mood for an Indiana Jones adventure, then ride through tunnels and evade booby traps and lethal tarantulas at the Lost City of Gold. The highlight of this section of the park is the Pirate’s Revenge – a 360-degree rotating pirate ship that swivels 24m off the ground. The screams emanating from riders can be heard throughout the park. Other attractions include the Buffalo Bill Coaster, Butch Cassidy’s Trail, Colorado Splash, Tomahawk and a 428m suspension bridge that has views of Sunway Lagoon’s entire expanse.
                                                </span>
                                            </p>
                                            <h2 id="p6">
                                                Extreme Park
                                            </h2>
                                            <p id="p6">
                                                <span>
                                                    A good place for adrenaline junkies, the Extreme Park has an archery range and paintball arena as well as all-terrain vehicles, a rock-climbing wall and go-karting, golf and other activities. Besides that, water sports, including diving lessons and Asia’s highest slingshot ride – the G-Force X – call this park home. Extreme Park also has Malaysia’s longest flying fox ride (206m) and visitors can take the ultimate leap of faith with the country’s first bungee jump.
                                                </span>
                                            </p>
                                            <h2 id="p6">
                                                Wildlife Park
                                            </h2>
                                            <p id="p6">
                                                <span>
                                                    Those looking to get in touch with their inner Tarzan and Jane can check out the animals at the Wildlife Park. Home to more than 150 species of animals from across the globe, it’s Malaysia’s first fully interactive wildlife display with educational animal-themed attractions and live animal shows. 
                                                </span>
                                            </p>
                                            <p id="p6">
                                                <span>
                                                    With a wide array of water rides, kid-centric attractions, midway amusements, thrill rides, live shows, animal exhibits, themed souvenir shops, and above-average dining venues, it’s no wonder that Sunway Lagoon is a favourite local attraction.
                                                </span>
                                            </p>
                                            <p id="p6">
                                                </br>
                                                <span>
                                                    <i>Opening Hours: Daily 10:00 - 18:00 </br>Location: Sunway Resort Hotel & Spa </br>Address: 3, Jalan PJS 11/11, Bandar Sunway, Petaling Jaya </br>Tel: +603 5639 0000 </br></i>
                                                </span>
                                            </p>
                                            <button class="b6" id="b6-2">Show Less</button>
                                            <script src="scripting/guide1.js"></script>
                                        </div>
                                    </div>
                                </div>
                            <!-- 7 -->
                            <div class="top10itemwrapper">
                                <div class="itemheader">
                                    <div class="itemheaderdetail">
                                        <h1>
                                            Jalan Alor
                                        </h1>
                                        <p id="subtitle">Bukit Bintang</p>                                     
                                    </div>
                                    <div class="itemheaderpic">
                                        <img src="images/Guides/ja.jpg">
                                    </div>
                                </div>
                                <div class="itemdetail">
                                    <div class="item_detail">
                                        <p>
                                            <span>
                                                Hosting a lot of hawker stalls and seafood restaurants, Jalan Alor is one of the most famous roads in Kuala Lumpur for food. Located just behind Jalan Bukit Bintang and a short walk away from Changkat Bukit Bintang, it is a favourite after-clubbing dining spot in the Golden Triangle area.
                                            </span>
                                        </p>
                                        <button class="b7" id="b7-1">Show More</button>
                                        <p id="p7">
                                            <span>
                                                Though the seafood at the air-conditioned restaurants is really good and inexpensive, we highly recommend the hawker food. KL being an immigrant city, the variety of food available is amazing and in Jalan Alor the barbecued meats, noodles and desserts are some of the best (and cheapest) in the city. Most of these dishes cannot be found in fashion-conscious restaurants – and even if they are, they are rarely as tasty, so hawker stalls are a favourite on the city’s foodie scene.
                                            </span>
                                        </p>
                                        <p id="p7">
                                            <span>
                                                Called the cultural hearth of the city’s local cuisine, tourists rarely venture here largely because of its ‘hidden’ location. A sharp contrast to trendy Jalan Bukit Bintang and Changkat Bukit Bintang, Jalan Alor has a traditional charm to it with atmospheric air-conditioned Chinese seafood restaurants, bright fluorescent restaurant signage lighting and mini red Chinese lanterns strung up in the trees. But it is also a tad messy because of the seemingly-endless row of hawker stalls set up on the five-foot walkway, with plastic tables and chairs spilling out onto the road.
                                            </span>
                                        </p>
                                        <p id="p7">
                                            <span>
                                                Sure, the food is the main draw but the atmosphere is also truly memorable. The place stays loud and vibrant throughout the night with vendors furiously fanning grills of chicken and beef skewers, the metallic clang of frying woks and the air is thick with charcoal smoke.
                                            </span>
                                        </p>
                                        <p id="p7">
                                            <span>
                                                At the food stalls food is cooked in a furious fashion (with delicious smells coming from the frying woks and boiling pots) and served on plastic plates in a rainbow of colours. Most hawker stalls have picture menus, making ordering simple.   
                                            </span>
                                        </p>
                                        <p id="p7">
                                            <span>
                                                We suggest you grab a table somewhere in front of Restoran Dragon View at the top of the street and then walk along and order your dishes from the diverse range of hawkers. We recommend the fried oyster egg from Restoran Wong Ah Wah: a thin and crispy omelette with plump and briny oysters that is served with fresh coriander leaves and accompanied by a chilli sauce that gives it a tangy, spicy kick. Or even the smoky-flavoured satay (marinated chicken tenderloin) from Terminal Sate Zul and grilled chicken wings in a simple soy marinade with chicken rice and roasted barbecue pork from Restoran Meng Kee Grill Fish. 
                                            </span>
                                        </p>
                                        <p id="p7">
                                            <span>
                                                The easiest way to get here is via monorail: alight at the Bukit Bintang stop and head north along Jalan Bukit Bintang: from there Jalan Alor is a one-minute walk.
                                            </span>
                                        </p>
                                        <p id="p7">
                                            </br>
                                            <span>
                                                <i>Location: </i>
                                                <br>
                                                <div id="p7">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.805627766846!2d101.70680001450043!3d3.1459377540503257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc362993b6bbf9%3A0xb51e49d2f36c3d3f!2sJalan+Alor%2C+Bukit+Bintang%2C+Kuala+Lumpur%2C+Wilayah+Persekutuan+Kuala+Lumpur!5e0!3m2!1sen!2smy!4v1524461748744" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>
                                            </span>
                                        </p>
                                        <button class="b7" id="b7-2">Show Less</button>
                                        <script src="scripting/guide1.js"></script>
                                    </div>
                                </div>
                            </div>
                            <!-- 8 -->
                            <div class="top10itemwrapper">
                                <div class="itemheader">
                                    <div class="itemheaderdetail">
                                        <h1>
                                            Aquaria KLCC
                                        </h1>
                                        <p id="subtitle">KLCC</p>                                     
                                    </div>
                                    <div class="itemheaderpic">
                                        <img src="images/Guides/ak.jpg">
                                    </div>
                                </div>
                                <div class="itemdetail">
                                    <div class="item_detail">
                                        <p>
                                            <span>
                                                Aquaria KLCC, located on the concourse level of the Kuala Lumpur Convention Centre, is said to be one of the largest aquariums in Southeast Asia. Home to over 150 species of marine life, its star attractions include scary tiger sharks, lethal sea snakes, blue rays, bright coral fish, seahorses and more.
                                            </span>
                                        </p>
                                        <button class="b8" id="b8-1">Show More</button>
                                        <p id="p8">
                                            <span>
                                                It’s a well-stocked aquarium just begging to be explored, and after a few hours here you'll have seen over 5,000 freshwater and marine creatures, including massive arapaimas, giant groupers, gar fish and more. Some people write it off as a tourist trap, but they’re sorely missing out – beyond the big tanks, with gallons of water, filled with necklaces of kelp, coral and mysterious and sometimes menacing sea creatures, is one of the country’s foremost sightseeing attractions with real depth and complexity.
                                            </span>
                                        </p>
                                        <p id="p8">
                                            <span>
                                                Well worth exploring, Kuala Lumpur Aquarium doesn’t just ‘submerge’ visitors beneath thousands of gallons of seawater – instead the venue is laid out to take visitors through different watery landscapes, from the highlands and flooded jungles of Malaysia, to the Amazon basin, coral reefs and the open ocean. Your journey isn’t a linear one – start off on Level 1 where you’ll see piranhas make quick work of their meal as well as electric eels, elephantnose fish and electric catfish. Also in this section, visitors can check out the DNA Touch Pool where they can pick up and feel the texture of live corals and star fish.
                                            </span>
                                        </p>
                                        <h2 id="p8">
                                            The Tunnel at Aquaria KLCC
                                        </h2>
                                        <p id="p8">
                                            <span>
                                                One of the highlights of Aquaria KLCC is a giant tank (featuring an authentic-looking shipwreck) – a 90m walk-through tunnel with a moving travelator in its centre. Inside you’ll be surrounded by sand tiger sharks, huge stingrays and more. You can take a break from looking at Nemo and his crew, as you head to The Stream which plays host to the giant water rat and the adorable Asian small-clawed otter. Meanwhile, the Jewels of the Jungle section is home to a variety of reptiles, amphibians and insects including the green snake, coatimundi, tarantula and many others; also be sure to check out the exhibit showcasing the life cycle of butterflies.
                                            </span>
                                        </p>
                                        <h2 id="p8">
                                            Weird and Wonderful
                                        </h2>
                                        <p id="p8">
                                            <span>
                                                Level 2 sees you journeying through the Amazon Flooded Forest where the oversized araipaima, red tail catfish and many others dwell; next, head up to The Coast to see archer fish, horseshoe crabs and more. Later, develop a deep appreciation for deep sea inhabitants such as the octopus and giant blotched fantail ray at the Oceanarium. Lastly, the Weird & Wonderful section is home to chambered nauticus, sea jelly and more, while the Coral Discovery Section has the requisite array of coral, seahorses and more. What’s more, catch the fish feeding sessions which take place on Mondays, Wednesdays and Saturdays in the 2.5 million-litre aquarium.
                                            </span>
                                        </p>
                                        <h2 id="p8">
                                            Diving with Sharks
                                        </h2>
                                        <p id="p8">
                                            <span>
                                                The best parts of Aquaria KLCC might actually be when you’re feeling a little lost – either literally, given the sheer size of this place, or figuratively, as you try to learn as much as you can about the oftentimes ignored multifaceted deep sea world. Though the aquaria revels in simple pleasures, thrill seekers are also well catered for – they can get-up-close-and-personal with tiger sharks, stingrays and more as the aquarium has a Diving with Sharks program. Even though visitors have to sign a liability waiver form in order to strap on tanks, it’s a safe environment as the sharks have been in Aquaria KLCC for more than five years now and are domesticated. Those who don’t have diving permits can join the Cage Rage programme where visitors take the plunge into the tank within the confines of a submerged cage.
                                            </span>
                                        </p>
                                        <p id="p8">
                                            <span>
                                                While this elegant underwater world may seem a kid-centric attraction, it caters well to all ages. There are plenty of reasons to ‘dive in’ and those who do will not regret it. After all, how many people can say they explored oceans in just a few hours?
                                            </span>
                                        </p>
                                        <p id="p8">
                                            </br>
                                            <span>
                                                <i>Opening Hours: Daily 10:00 - 20:00 <br>MRT: KLCC <br>Address: Kuala Lumpur Convention Centre Complex, Kuala Lumpur City Centre <br>Tel: +603 2333 1888</i>
                                            </span>
                                        </p>
                                        <button class="b8" id="b8-2">Show Less</button>
                                        <script src="scripting/guide1.js"></script>
                                    </div>
                                </div>
                            </div>
                            <!-- 9 -->
                            <div class="top10itemwrapper">
                                <div class="itemheader">
                                    <div class="itemheaderdetail">
                                        <h1>
                                            Central Market
                                        </h1>
                                        <p id="subtitle">Chinatown</p>                                     
                                    </div>
                                    <div class="itemheaderpic">
                                        <img src="images/Guides/cm.jpg">
                                    </div>
                                </div>
                                <div class="itemdetail">
                                    <div class="item_detail">
                                        <p>
                                            <span>
                                                Central Market is one of KL’s most familiar landmarks and a popular tourist attraction. Built in 1928, it is a short walk away from Petaling Street, along Jalan Hang Kasturi. Also called Pasar Seni, it used to be a simple wet market but in the early 1980s was revamped into a handicrafts outlet.
                                            </span>
                                        </p>
                                        <button class="b9" id="b9-1">Show More</button>
                                        <p id="p9">
                                            <span>
                                                The focus for the city’s artistic community, inside the building is a warren of boutiques, handicraft and souvenir stalls with traders selling local merchandise such as authentic Malaysian batik prints and more. Central Market is located on the opposite bank of the Dayabumi Complex and is an art-deco style building with local ‘Baroque’ trimmings.
                                            </span>
                                        </p>
                                        <h2 id="p9">
                                                Central Market- A Heritage Site
                                        </h2>
                                        <p id="p9">
                                            <span>
                                                A Malaysian cultural landmark, Central Market has been classified as a Heritage Site by the National Heritage Department. Similar to London’s Covent Garden or San Francisco’s Fisherman’s Wharf, the 120 year-old Central Market has undergone several renovations over the years to attract younger generations and to foster greater appreciation for racial tolerance and integration.
                                            </span>
                                        </p>
                                        <p id="p9">
                                            <span>
                                                Central Market is strategically located close to major public transportation links, making it easy to access from all major KL destinations. The second floor has several restaurants and a food court serving Asian cuisine.
                                            </span>
                                        </p>
                                        <h2 id="p9">
                                            Cultural Celebrations
                                        </h2>
                                        <p id="p9">
                                            <span>
                                                Central Market hosts a variety of vendors that bring out their best wares during the country’s colourful and exciting annual festivals such as Hari Raya, Chinese New Year and Deepavali. For example, during the Hari Raya festival vendors will sell an assortment of sweet cakes and titbits; at Deepavali, the market has a colourful collection of saris and other Indian merchandise on display, while Chinese New Year sees the bazaar filled with Chinese treats as well as traditional Chinese costumes for sale. For the rest of the year Central Market supports local contemporary arts by hosting art exhibitions.
                                            </span>
                                        </p>
                                        <h2 id="p9">
                                            Merchandise at Central Market
                                        </h2>
                                        <p id="p9">
                                            <span>
                                                Another way to describe Central Market is to say that it is like New York’s SoHo flea market – the merchandise here is cheap and traditional goods such as batik, embroidery carvings, souvenirs, and sculptures are on offer. The Batik Emporium houses well-known batik designer labels, while outside local artists painting renderings of the busy street or impromptu song-and-dance performance take place.
                                            </span>
                                        </p>
                                        <p id="p9">
                                            <span>
                                                Divided into different zones, vendors’ stall zones are distinctive by race: the purpose of this zoning practice is to let visitors get an insight into the cultural differences of the various races in Malaysia. There is even a Malacca ‘Jonker Street’, an area of Central Market that looks like a typical Baba-Nyonya house with Peranakan-style furnishings and fixtures on sale.
                                            </span>
                                        </p>
                                        <p id="p9">
                                            </br>
                                            <span>
                                                <i>Highlights: <br>Arch Collection, Actop Craft, Asli Craft, Borneo Pearls, Cute Fish Spa, Dodo Art & Craft, Fine Batik, House of Silver, Kheng's Antique and Collectible, Success Portrait, Suria Portrait Centre, Swartz Creation. <br>Opening Hours: Daily, 10:00 – 22:00 <br>Location: Just around the corner from Kota Raya Shopping Centre <br>Address: No. 10, 1st-3rd floor, Jalan Hang Kasturi <br>Tel: +603 2031 0399 or +603 2031 5399 or +603 2031 7399</i>
                                            </span>
                                        </p>
                                        <button class="b9" id="b9-2">Show Less</button>
                                        <script src="scripting/guide1.js"></script>
                                    </div>
                                </div>
                            </div>
                            <!-- 10 -->
                            <div class="top10itemwrapper">
                                <div class="itemheader">
                                    <div class="itemheaderdetail">
                                        <h1>
                                            Perdana Botanical Garden
                                        </h1>
                                        <p id="subtitle">Lake Garden</p>                                     
                                    </div>
                                    <div class="itemheaderpic">
                                        <img src="images/Guides/pbg.jpg">
                                    </div>
                                </div>
                                <div class="itemdetail">
                                    <div class="item_detail">
                                        <p>
                                            <span>
                                                The Perdana Botanical Gardens, set within the Tun Abdul Razak Heritage Park, contain the largest collection of flower gardens and animal parks in Kuala Lumpur city centre. Also called Lake Gardens, this centrally-located recreational park is best visited during the weekends, when it’s packed with locals enjoying various activities on the main square as well as along its many lakefront trails and landscaped hills.
                                            </span>
                                        </p>
                                        <button class="b10" id="b10-1">Show More</button>
                                        <p id="p10">
                                            <span>
                                                One of its standout features is the Orchid Garden, which is a five-minute walk from the Kuala Lumpur Bird Park. This flower garden spans 10,000 square metres, housing walking paths and manmade fountains, as well as a semi-circle pergola and rock garden that house 800 species of orchids from both climbing and terrestrial varieties.
                                            </span>
                                        </p>
                                        <p id="p10">
                                            <span>
                                                Another prominent attraction within the Perdana Botanical Gardens, Hibiscus Garden is where you can find Malaysia’s national flower in full bloom. Less than 10 minutes away from the Kuala Lumpur Butterfly Park, this landscaped garden also houses a colonial-era building, where you can find a quaint tearoom and a gallery showcasing the history and significance of the hibiscus flower in Malaysian history.
                                            </span>
                                        </p>
                                        <p id="p10">
                                            <span>
                                                Laman Perdana is located in the between both gardens, where you can find various events taking place at the main square. Located close to a manmade lake, the square is fitted with a massive semi-transparent awning, cafes serving light snacks and beverages, as well as gazebos overlooking the gardens.
                                            </span>
                                        </p>
                                        <p id="p10">
                                            <span>
                                                Open daily between 09:00 and 18:00, entrance to the Perdana Botanical Gardens is free all year long, though visiting the Orchid Garden and Hibiscus Garden requires a payment of RM1 on weekends. There are also additional entrance fees for some attractions within the park, including the bird and butterfly parks.
                                            </span>
                                        </p>
                                        <p id="p10">
                                            <span>
                                                Aside from the gardens, the Perdana Botanical Gardens are highly frequented due to their proximity to some of KL’s most notable landmarks, including the Islamic Arts Museum Malaysia, the National Monument, and the National Planetarium. Visitors can enjoy a tour of all the attractions within the Heritage Park via shuttle trams between 09:00 and 18:00, with tickets priced at RM6 for adults and RM2 for children.
                                            </span>
                                        </p>
                                        <p id="p10">
                                            </br>
                                            <span>
                                                <i>Opening Hours: Daily 07:00 – 20:00 <br>Location: Jalan Kebun Bunga, Tasik Perdana, Kuala Lumpur <br>Tel: +603 2617 6404</i>
                                            </span>
                                        </p>
                                        <button class="b10" id="b10-2">Show Less</button>
                                        <script src="scripting/guide1.js"></script>
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