<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Article: Kuala Lumpur Travel Information</title>
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
            background-image: url('images/Guides/kl-.jpg');
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
            <span class="border">KUALA LUMPUR TRAVEL INFORMATION</span>
        </div>
    </div>
    <div id="outercontent" class="container">
        <div class="row">
            <div class="content">
                <p>
                    <span>
                        This page on travel information in Kuala Lumpur includes sections that deal with minute travel details such as customs entry procedures, transport, traditional culture, and even tipping policy. Particularly important when planning a trip to the city, with the country’s multi-ethnic racial makeup it is important to come prepared so you do not unintentionally offend locals. For example, while tipping in hotels is uncommon, these days when dining out in trendy restaurants it is best to leave a tip because if not, you will certainly be viewed as stingy! To help you navigate through in and outs of the city, this Kuala Lumpur travel information page will keep you updated on the latest practices, from the instant you step out of the plane to the time you check out of your hotel to depart KL.
                    </span>
                </p>
                <h2>
                    Arrivals
                </h2>
                <p>
                    <span>
                        International flights arrive at the Satellite Building and the Aero train brings passengers to the International Level of the Contact Pier. Other international, domestic and mixed flights arrive on the Domestic Level of the Contact Pier.
                    </span>
                </p>
                <h2>
                    Entry Formalites
                </h2>
                <p>
                    <span>
                        All visitors must posses a valid passport or other internationally recognised document with a minimum validity period of six months beyond the period of intended stay.
                    </span>
                </p>
                <p>
                    <span>
                        A passport is also necessary for travel between Peninsular Malaysia and the East Malaysian states of Sabah & Sarawak.
                    </span>
                </p>
                <h2>
                    Travellers Declaration Form
                </h2>
                <p>
                    <span>
                        In addition to filling out a disembarkation card, all visitors must fill out a Travellers Declaration Form when entering/ leaving the country to declare the amount of currency brought in and taken out.
                    </span>
                </p>
                <p>
                    <span>
                        A resident is allowed to carry Ringgit notes not exceeding RM1,000.00 into and out of Malaysia. He or she is also allowed to carry foreign currency notes (including travellers' cheques) not exceeding the equivalent of RM10,000.00 out of Malaysia.
                    </span>
                </p>
                <p>
                    <span>
                        A non-resident is allowed to bring in Ringgit notes not exceeding RM1,000.00 and any amount of foreign currency into Malaysia. When departing, he or she is allowed to carry out Ringgit notes not exceeding RM1,000.00 and foreign currency notes (including travellers cheques) not exceeding the amount brought in.                    
                    </span>
                </p>
                <p>
                    <span>
                        The Travellers Declaration Form must be handed to the immigration officer together with the disembarkation card and passport.
                    </span>
                </p>
                <h2>
                    Transportation
                </h2>
                <p>
                    <span>
                        Taxis use a coupon system and taxi booths are available upon exit from the Arrivals Hall. There is a choice of an airport limousine service as well as a budget taxi service.
                    </span>
                </p>
                <p>
                    <span>
                        Airport coach services to the city is operated by Airport Coach Sdn Bhd are available one floor down from the Arrivals Hall. Airport Coach Services.
                    </span>
                </p>
                <p>
                    <span>
                        Private vehicle car parks are connected by the Skybridge on the Station Mezzanine Level.
                    </span>
                </p>
                <h2>
                    Climate & Clothing
                </h2>
                <p>
                    <span>
                        Malaysia has an equatorial climate with uniform temperatures throughout the year. Temperatures range from 32 degrees Celsius during the day to a cool 22 degrees Celsius during the night. It is much cooler in the hill country. Rainfall is common throughout the year, averaging 200-250 cm a year. Light comfortable clothing is the norm with lightweight woollens required for visits to highland areas.
                    </span>
                </p>
                <h2>
                    Goverment
                </h2>
                <p>
                    <span>
                        Malaysia practises parliamentary democracy. Parliament consists of the House of Representatives and the Senate, and the head of Government is the Prime Minister. The head of State is His Majesty the Yang Di Pertuan Agung.
                    </span>
                </p>
                <h2>
                    Religion
                </h2>
                <p>
                    <span>
                        Islam is the official religion but Buddhism, Taoism, Hinduism, Sikhism, Christianity and other religions are also freely practised.
                    </span>
                </p>
                <h2>
                    Banking Hours
                </h2>
                <p>
                    <span>
                        In all states, except for Kelantan, Kedah and Terengganu, banking hours are from 9.30am to 4.00pm on weekdays, and from 9.30am to 11.30am on Saturday. Also, banks in all states except Kelantan, Kedah and Terengganu close on the first Saturday of every month.
                    </span>
                </p>
                <p>
                    <span>
                        In Kelantan, Kedah and Terengganu, banks open from 9.30am to 4.00pm on Monday, Tuesday, Wednesday, Saturday and Sunday. They close on Friday. On Thursday, opening hours are from 9.30am to 11.30am except for the first Thursday of every month when they are closed.
                    </span>
                </p>
                <h2>
                    Currency
                </h2>
                <p>
                    <span>
                        The Malaysian currency is the Ringgit (RM), which is divided into 100 sen. Ringgit notes are in denominations of RM100, RM50, RM20, RM10, RM5, and RM2. Coins are issued in denominations of RM1, 50 sen, 20 sen, 10 sen, 5 sen and 1 Sen.
                    </span>
                </p>
                <h2>
                    Tipping
                </h2>
                <p>
                    <span>
                        Most hotels and restaurants impose a 10% service charge and 5% government tax on their bills, so tipping is often not necessary.
                    </span>
                </p>
                <h2>
                    Electricity & Water
                </h2>
                <p>
                    <span>
                        Electricity used is 220-240 volts at 50 cycles. Tap water is safe for human consumption.
                    </span>
                </p>
                <h2>
                    Health Regulations
                </h2>
                <p>
                    <span>
                        Visitors from yellow fever-infected areas and several African and Latin American countries must produce yellow fever vaccination certificates.
                    </span>
                </p>
                <h2>
                    Airport Departure Tax
                </h2>
                <p>
                    <span>
                        For international flights, airport departure tax is RM40 per person; for domestic flights, it is RM5.00. Only children below 2 years old are exempted.
                    </span>
                </p>
                <h2>
                    Narcotics
                </h2>
                <p>
                    <span>
                        The trafficking of illicit drugs in or out of the country carries the mandatory death sentence.
                    </span>
                </p>
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