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
    <link rel="stylesheet" href="styling/cart.css">
    <title>Home</title>
</head>

<body>

    <!-- navigation bar -->
    <div class="navbar">
        <a href="#" style="padding-right:60px;">
            <img src="images/KL Tour.png" alt="KLTour-logo" height="29" width="80">
        </a>
        <a href="homepage.php">Home</a>
        <a href="packages.php">Packages</a>
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
            <a href="#" id="cart-link" style="float:right; display: block; color:red;">
                <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Shopping Cart</a>
        </div>

    </div>
    <div style="height:4px;"></div>

    <div style="padding:1px;"></div>

    <!-- login/signup form -->
    <div id="overlay" onclick="close_form()">
        <div id="login">
            <embed src="login.html">
        </div>
    </div>
    <script src="scripting/loginform.js"></script>
    <iframe width="0" height="0" border="0" name="dummyframe" id="dummyframe" style="z-index:-999; position:absolute;"></iframe>
    <div class="checkout">
        <div class="row">
            <div class="col-75">
                <div class="container">
                    <form action="php_snippets/checkout.php" method="post" target="dummyframe">
                        <div class="row">
                            <div class="col-50">
                                <h3>Billing Address</h3>
                                <label for="fname">
                                    <i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="David Johnson">
                                <label for="adr">
                                    <i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" id="adr" name="address" placeholder="No 13, Jalan Damansara 8">
                                <label for="city">
                                    <i class="fa fa-institution"></i> City</label>
                                <input type="text" id="city" name="city" placeholder="Kuala Lumpur">

                                <div class="row">
                                    <div class="col-50">
                                        <label for="state">State</label>
                                        <input type="text" id="state" name="state" placeholder="Selangor">
                                    </div>
                                    <div class="col-50">
                                        <label for="zip">Zip</label>
                                        <input type="text" id="zip" name="zip" placeholder="43200">
                                    </div>
                                </div>
                            </div>

                            <div class="col-50">
                                <h3>Payment</h3>
                                <label for="fname">Accepted Cards</label>
                                <div class="icon-container">
                                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                                </div>
                                <label for="cname">Name on Card</label>
                                <input type="text" id="cname" name="cardname">
                                <label for="ccnum">Credit card number</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="0000-0000-0000-0000">
                                <label for="expmonth">Exp Month</label>
                                <select name="expmonth">
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear">Exp Year</label>
                                        <input type="text" id="expyear" name="expyear">
                                    </div>
                                    <div class="col-50">
                                        <label for="cvv">CVV</label>
                                        <input type="text" id="cvv" name="cvv">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <input type="submit" value="Continue to checkout" class="btn">
                    </form>
                </div>
            </div>
            <div class="col-25">
                <div class="container">
                    <h4>Cart
                        <span class="price" style="color:black">
                            <i class="fa fa-shopping-cart"></i>
                            <b>4</b>
                        </span>
                    </h4>
                    <div id="list-of-item" style="max-height:400px; overflow:auto;">
                        <div id="cart-empty"> 
                            <p style="text-align:center;">
                                The cart is empty
                            </p>
                        </div>
                       
                        <!-- <p>
                            <a href="#" title="click for more details">Product 1 with meal</a>
                            <span class="price">$15</span>
                        </p> -->
                    </div>
                    <?php include 'php_snippets/checkout.php'; ?>
                    <script type="text/javascript">
                    
                    function listpackage(){
                        var a = <?php echo json_encode($a); ?>; //main_order_ID
                        var b = <?php echo json_encode($b); ?>; //package_name
                        var c = <?php echo json_encode($c); ?>; //total_price
                        for(var i=0; i<a.length; i++){
                            var price = document.createElement("SPAN");
                            price.classList.add("price");
                            price.innerHTML = c[i];
                            //create list
                            //href and link content
                            base_url = "localhost/php_snippets/details?Main_order_ID=";
                            order_link = base_url.concat(a[i]);
                            var temp_link = document.createElement("a");
                            temp_link.href = order_link; //"http://test.com"
                            temp_link.target = '_blank';
                            temp_link.innerHTML = b[i]; 
                            temp_link.title = "click for more details";
                            //paragraph
                            var para = document.createElement("p");
                            para.appendChild(temp_link);
                            para.appendChild(price);

                            var attacher = document.getElementById("list-of-item");
                            attacher.appendChild(para);
                            

                            if(document.getElementById("cart-empty")!==null) {
                                var j = document.getElementById("cart-empty");
                                j.remove();
                            }    
                        }
                    }
                    
                    window.addEventListener("load", listpackage);
                    </script>
                    <hr>
                    <p>Total
                        <span class="price" style="color:black">
                            <b>$30</b>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- back to top button -->
    <button onclick="topFunction()" id="back-to-top" title="Go to top">
        <i class="fa fa-chevron-up"></i>
    </button>
</body>
<?php include 'php_snippets/session.php'; ?>



</html>