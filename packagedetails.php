<?php
include "php_snippets/config.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$myusername = $_SESSION['login_user'];
$mymainorderID = $_GET['Main_order_ID'];

$ask_purchaser = "SELECT Full_name FROM user WHERE Username='$myusername'";
$asking_purchaser = $db ->query($ask_purchaser);
$purchaser_row = $asking_purchaser -> fetch_assoc();
$purchaser = $purchaser_row["Full_name"];

$ask_order_paid = "SELECT Paid FROM main_order WHERE Main_order_ID=$mymainorderID";
$asking_order_paid = $db ->query($ask_order_paid);
$order_paid_row = $asking_order_paid -> fetch_assoc();
$order_paid = $order_paid_row["Paid"];
if($order_paid) {
    $paid = "Paid";
}
else $paid = "Unpaid";

$ask_package_ID = "SELECT Package_ID FROM main_order WHERE Main_order_ID = $mymainorderID";
$asking_package_ID = $db ->query($ask_package_ID);
$package_ID_row = $asking_package_ID -> fetch_assoc();
$package_ID = $package_ID_row["Package_ID"]; 

$base_package = $package_ID[0];

$ask_package_name = "SELECT Package_name FROM package WHERE Package_ID = $package_ID";
$asking_package_name = $db ->query($ask_package_name);
$package_name_row = $asking_package_name -> fetch_assoc();
$package_name = $package_name_row["Package_name"];

$ask_package_time = "SELECT Time FROM package WHERE Package_ID = (SELECT Package_ID FROM main_order WHERE Main_order_ID = $mymainorderID)";
$asking_package_time = $db ->query($ask_package_time);
$package_time_row = $asking_package_time -> fetch_assoc();
$package_time = $package_time_row["Time"];

$ask_total_price = "SELECT Total_price FROM main_order WHERE Main_order_ID = $mymainorderID";
$asking_total_price = $db ->query($ask_total_price);
$total_price_row = $asking_total_price->fetch_assoc();
$total_price = $total_price_row["Total_price"];

$join_food_table = "SELECT food.Food_name, food_order.Quantity FROM food INNER JOIN food_order on food_order.Food_ID = food.Food_ID AND food_order.Main_order_ID=$mymainorderID";
$foodname_quantity_table = $db ->query($join_food_table);
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- include Bootstrap css and Js -->

    <!-- include Google font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- include personalised stylesheet -->
    <link rel="stylesheet" href="styling/style.css">
    <title>Package details</title>

        <style>
            table {
                /* border-collapse: collapse; */
                border-spacing: 0;
                width: 50%;
                border: 1px solid #ddd;
                margin-left: 25%;
                float: left;
                /* display:block; */
            }
            th, td {
                text-align: left;
                padding: 16px;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2
            }
            button {
                float: right;
                margin-right: 25%;
                background: red;
                padding: 12px 16px 12px 16px;
                color: white;
                border: none;
                font-weight: 500;
                font-size: 16px;
                cursor: pointer;
            }
            
            #deletepackage:hover {
                background: darkred;
            }

            #changepackage {
                background: rgb(47, 172, 47);
            }
            #changepackage:hover {
                background: green;
            }
            
            #without-food {
                color: grey;
            }
        </style>
    </head>
    <body>

    <h2 style="margin-left:25%; float:left;">Package details</h2>
    <div style="height:5px;"> </div>
    <div>
        <form action="php_snippets/deletepackage.php" method="get">
            <button name="Main_order_ID" id="deletepackage" type="submit" value="<?php echo $mymainorderID; ?>">Delete Package</button>
        </form>
        <form action="<?php echo $base_package . '.php'?>" method="get">
            <button name="Main_order_ID" id="changepackage" type="submit" style="margin-right:20px;" value="<?php echo $mymainorderID; ?>">Change Package</button>
        </form>   
    <div> 
    <br><br><br>
<table>
    <tr>
        <td>Package Name</td>
        <td><?php echo $package_name ?></td>
    </tr>
    <tr>
        <td>Order_ID</td>
        <td># <?php echo $mymainorderID ?></td>
    </tr>
    <tr>
        <td>Buyer</td>
        <td><?php echo $purchaser ?></td>
    </tr>
    <tr>
        <td>Time</td>
        <td><?php echo $package_time ?></td>
    </tr>

    <tr>
        <td>Food order</td>
        <td>
        <?php
            $counter = 0;
            while ($row = $foodname_quantity_table->fetch_assoc()){
                echo "<p>";
                echo  $row['Food_name'];
                echo "&nbsp;&nbsp;-&nbsp;&nbsp;";
                echo $row['Quantity'];
                echo "</p>";
                $counter = 1;
            }
            if($counter==0){
                echo "<p id='without-food'>";
                echo "Without food";
                echo "</p>";
            }
        ?>
        </td>
    </tr>

    <tr>
        <td>Price</td>
        <td>RM 	&nbsp;<?php echo $total_price ?></td>
    </tr>

    <tr>
        <td>Status</td>
        <td><?php echo $paid ?></td>
    </tr>
  
</html>