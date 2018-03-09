CREATE TABLE `Food` (
  `Food_ID` INT,
  `Price` FLOAT,
  `Quantity_in_stock` INT,
  PRIMARY KEY (`Food_ID`)
);

CREATE TABLE `Package` (
  `Package_ID` INT,
  `Place` VARCHAR(20),
  `Time` datetime,
  `Price` FLOAT,
  `Quantity_in_stock` INT,
  PRIMARY KEY (`Package_ID`)
);

CREATE TABLE `Order` (
  `Username` VARCHAR(20),
  `Main_order_ID` INT,
  `Package_ID` INT,
  `Total_price` FLOAT,
  PRIMARY KEY (`Main_order_ID`),
  KEY `FK` (`Username`, `Package_ID`)
);

CREATE TABLE `User` (
  `Username` VARCHAR(20),
  `Email` VARCHAR(30),
  `Phone` INT,
  `First_name` VARCHAR(20),
  `Last_name` VARCHAR(20),
  `Address` VARCHAR(50),
  `Payment_card` INT,
  `Password` VARCHAR(20),
  PRIMARY KEY (`Username`)
);

CREATE TABLE `Food_order` (
  `Main_order_ID` INT,
  `Food_order_ID` INT,
  `Food_ID` INT,
  `Quantity` INT,
  `Food_price` FLOAT,
  PRIMARY KEY (`Food_order_ID`),
  KEY `FK` (`Main_order_ID`, `Food_ID`)
);

