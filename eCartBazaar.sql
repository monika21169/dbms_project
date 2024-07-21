DROP SCHEMA IF EXISTS eCartBazzar;

CREATE DATABASE eCartBazzar;
USE eCartBazzar;

-- Drop tables with IF EXISTS
DROP TABLE IF EXISTS Admin;
DROP TABLE IF EXISTS Brand;
DROP TABLE IF EXISTS Product;
DROP TABLE IF EXISTS Order_Details;
DROP TABLE IF EXISTS Seller;
DROP TABLE IF EXISTS User;
DROP TABLE IF EXISTS Coupons;
DROP TABLE IF EXISTS Billing_Details;
DROP TABLE IF EXISTS Order_Table;
DROP TABLE IF EXISTS Inventory;
DROP TABLE IF EXISTS Cart;
DROP TABLE IF EXISTS Category;
DROP TABLE IF EXISTS Items_contained;
DROP TABLE IF EXISTS Items_purchased;
DROP TABLE IF EXISTS BelongsTo;

USE eCartBazzar;

CREATE TABLE Admin (
    Admin_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Username VARCHAR(50) NOT NULL,
    Password VARCHAR(50) NOT NULL
);
INSERT INTO Admin (Username, Password) VALUES
('Monika', 'qwerty456'),
('Aditi', 'asdfg345');
INSERT INTO Admin (Admin_id,Username, Password) VALUES
(3,'Ayush', 'nhfnbshu345');
INSERT INTO Admin VALUES (4,'Ritika', 'khgff386');

-- SELECT *FROM Admin;

CREATE TABLE Brand (
    Brand_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Brand_name VARCHAR(50) NOT NULL
);
INSERT INTO Brand (Brand_name) VALUES
('Samsung'),
('Apple'),
('Nike'),
('Adidas'),
('Sony'),
('Microsoft'),
('LG'),
('Google'),
('HP'),
('Dell'),
('Coca-Cola'),
('Pepsi'),
('Toyota'),
('Honda'),
('Mercedes-Benz'),
('BMW'),
('Audi'),
('Volkswagen'),
('Ford'),
('Ferrari'),
('Lamborghini'),
('McDonald\'s'),
('Burger King'),
('KFC'),
('Subway'),
('Starbucks'),
('Nestle'),
('Mars'),
('P&G'),
('Unilever'),
('Amazon'),
('eBay'),
('Walmart'),
('Target'),
('Best Buy'),
('IKEA'),
('H&M'),
('Zara'),
('Gucci'),
('Rolex'),
('Cartier'),
('Louis Vuitton'),
('Chanel'),
('Dior'),
('Tiffany & Co.'),
('Samsung'),
('Panasonic'),
('Philips'),
('Nintendo'),
('PlayStation');
-- SELECT *FROM Brand;

CREATE TABLE Product (
    Product_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Product_name VARCHAR(50) NOT NULL,
    Product_cost DECIMAL(10,2) NOT NULL CHECK (Product_cost > 0),
    Product_Description VARCHAR(150) NOT NULL,
    Rating INT NOT NULL,
    Brand_id INT NOT NULL,
    FOREIGN KEY (Brand_id) REFERENCES Brand(Brand_id)
);
INSERT INTO Product (Product_name, Product_cost, Product_Description, Rating, Brand_id) VALUES
('Smartphone X', 799.99, 'High-end smartphone with cutting-edge features', 4, 2),
('Laptop Pro', 1299.99, 'Powerful laptop for professional use', 4, 1),
('Running Shoes', 79.99, 'Lightweight and comfortable shoes for running', 5, 3),
('Sports Watch', 149.99, 'Water-resistant sports watch with fitness tracking', 4, 4),
('4K Smart TV', 899.99, 'Ultra HD Smart TV with Smart features', 4, 5),
('Gaming Console', 499.99, 'Latest gaming console with high-performance graphics', 4, 6),
('Refrigerator', 1299.99, 'Large capacity refrigerator with advanced cooling technology', 4, 7),
('Smart Home Hub', 199.99, 'Centralized hub for smart home automation', 4, 8),
('Printer Pro', 199.99, 'Professional-grade printer for high-quality prints', 4, 9),
('Digital Camera', 599.99, 'Compact digital camera with advanced imaging technology', 4, 5),
('Coffee Maker', 79.99, 'Drip coffee maker for brewing delicious coffee at home', 4, 10),
('Wireless Earbuds', 129.99, 'Bluetooth wireless earbuds with noise cancellation', 5, 11),
('Tablet Mini', 299.99, 'Compact tablet with a high-resolution display', 4, 1),
('Fitness Tracker', 69.99, 'Wearable fitness tracker with heart rate monitoring', 4, 9),
('Desk Chair', 149.99, 'Ergonomic desk chair for comfortable seating', 5, 12),
('Bluetooth Speaker', 89.99, 'Portable Bluetooth speaker with great sound quality', 4, 13),
('Air Purifier', 199.99, 'Home air purifier for clean and fresh air', 4, 7),
('Robot Vacuum', 299.99, 'Smart robot vacuum for automated cleaning', 4, 14),
('Electric Toothbrush', 49.99, 'High-tech electric toothbrush for effective oral care', 5, 15),
('Smart Thermostat', 129.99, 'Energy-efficient smart thermostat for home climate control', 4, 8),
('Outdoor Grill', 399.99, 'Durable outdoor grill for barbecue enthusiasts', 5, 16),
('Backpack', 49.99, 'Stylish and functional backpack for everyday use', 4, 17),
('Power Bank', 29.99, 'Portable power bank for charging devices on the go', 4, 18),
('Sleeping Bag', 59.99, 'Warm and cozy sleeping bag for outdoor adventures', 5, 19),
('Sunglasses', 79.99, 'Fashionable sunglasses with UV protection', 4, 20),
('Wireless Mouse', 19.99, 'Wireless mouse for convenient computer navigation', 4, 9),
('Gourmet Chocolate', 14.99, 'Premium quality gourmet chocolate assortment', 5, 21),
('Smart Doorbell', 129.99, 'Video doorbell with smart security features', 4, 8),
('Tennis Racket', 89.99, 'High-performance tennis racket for serious players', 4, 22),
('Yoga Mat', 29.99, 'Comfortable and durable yoga mat for fitness activities', 5, 23),
('Hiking Boots', 99.99, 'Sturdy and waterproof hiking boots for outdoor adventures', 4, 24),
('Cookware Set', 149.99, 'Complete cookware set for versatile cooking options', 4, 25),
('Blender Pro', 79.99, 'Powerful blender for smoothies and food processing', 4, 9),
('Dining Table', 299.99, 'Stylish dining table for home gatherings', 5, 26),
('Smart Lock', 129.99, 'Keyless smart lock for secure and convenient access', 4, 8),
('Wireless Headphones', 129.99, 'Over-ear wireless headphones with noise isolation', 5, 4),
('Robot Lawn Mower', 399.99, 'Automated robot lawn mower for effortless lawn maintenance', 4, 27),
('Camping Tent', 149.99, 'Spacious camping tent for outdoor camping trips', 4, 28),
('Digital Piano', 599.99, 'Digital piano with realistic sound and weighted keys', 5, 29),
('Candle Set', 19.99, 'Scented candle set for a relaxing atmosphere', 4, 30),
('Smart Mirror', 199.99, 'Mirror with built-in smart features for daily use', 4, 8),
('Electric Scooter', 299.99, 'Foldable electric scooter for urban commuting', 4, 31),
('Wireless Security Camera', 79.99, 'Wireless security camera for home surveillance', 5, 32),
('Sofa Set', 699.99, 'Comfortable and stylish sofa set for the living room', 4, 33),
('Portable Grill', 69.99, 'Compact and portable grill for outdoor cooking', 4, 16),
('Handbag', 59.99, 'Fashionable handbag for everyday use', 5, 34),
('Home Theater System', 499.99, 'High-quality home theater system for immersive entertainment', 4, 5),
('Digital Watch', 89.99, 'Stylish digital watch with various features', 4, 4),
('Cycling Helmet', 39.99, 'Protective cycling helmet for safety during rides', 5, 35);

-- SELECT *FROM Product;

CREATE TABLE Order_Details (
    Tracking_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Shipper_Name VARCHAR(50) NOT NULL,
    Location VARCHAR(50) NOT NULL,
    Expected_Delivery_Date DATE NOT NULL,
    Cancel_Refund_Status VARCHAR(50) NOT NULL,
    Complain VARCHAR(50) NOT NULL
);
INSERT INTO Order_Details (Shipper_Name, Location, Expected_Delivery_Date, Cancel_Refund_Status, Complain) VALUES
('FedEx', '123 Main Street, Cityville', '2024-02-15', 'Not Cancelled', 'No complaints'),
('UPS', '456 Oak Avenue, Townsville', '2024-02-16', 'Cancelled', 'Late delivery'),
('DHL', '789 Maple Lane, Villagetown', '2024-02-17', 'Refunded', 'Damaged package'),
('USPS', '101 Pine Road, Hamletville', '2024-02-18', 'Not Cancelled', 'Missing items'),
('Amazon Logistics', '202 Cedar Street, Boroughburg', '2024-02-19', 'Cancelled', 'Wrong product'),
('DHL Express', '303 Birch Boulevard, Settlement City', '2024-02-20', 'Not Cancelled', 'No complaints'),
('UPS Express', '404 Elm Court, Metropolis', '2024-02-21', 'Refunded', 'Late delivery'),
('FedEx Express', '505 Willow Way, Junctionburg', '2024-02-22', 'Not Cancelled', 'No complaints'),
('USPS Express', '606 Redwood Square, Hamletsville', '2024-02-23', 'Not Cancelled', 'No complaints'),
('Amazon Logistics Express', '707 Sycamore Lane, Downtown', '2024-02-24', 'Cancelled', 'Damaged package'),
('DHL Freight', '808 Pinecrest Avenue, Uptown', '2024-02-25', 'Refunded', 'Missing items'),
('UPS Freight', '909 Oakwood Drive, Riverside', '2024-02-26', 'Not Cancelled', 'No complaints'),
('FedEx Freight', '1010 Cedarwood Lane, Lakeside', '2024-02-27', 'Not Cancelled', 'No complaints'),
('USPS Freight', '1111 Birchwood Road, Suburbia', '2024-02-28', 'Cancelled', 'Wrong product'),
('Amazon Logistics Freight', '1212 Maplewood Circle, Summit City', '2024-02-29', 'Refunded', 'Late delivery'),
('DHL Cargo', '1313 Redwood Court, Plaza Park', '2024-03-01', 'Not Cancelled', 'No complaints'),
('UPS Cargo', '1414 Sycamore Street, Center City', '2024-03-02', 'Cancelled', 'Missing items'),
('FedEx Cargo', '1515 Elmwood Avenue, Capital Town', '2024-03-03', 'Refunded', 'Damaged package'),
('USPS Cargo', '1616 Willowwood Square, Downtown', '2024-03-04', 'Not Cancelled', 'No complaints'),
('Amazon Logistics Cargo', '1717 Pinecrest Boulevard, Metroville', '2024-03-05', 'Cancelled', 'Wrong product'),
('DHL Ground', '1818 Cedar Lane, Village Center', '2024-03-06', 'Refunded', 'Late delivery'),
('UPS Ground', '1919 Birch Street, Central Square', '2024-03-07', 'Not Cancelled', 'No complaints'),
('FedEx Ground', '2020 Oakwood Square, Uptown', '2024-03-08', 'Not Cancelled', 'No complaints'),
('USPS Ground', '2121 Sycamore Avenue, Lakeside', '2024-03-09', 'Cancelled', 'Damaged package');

CREATE TABLE Seller (
    Seller_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Seller_Name VARCHAR(50) NOT NULL,
    Password INT NOT NULL,
    Delivery_speed INT NOT NULL
);
INSERT INTO Seller (Seller_Name, Password, Delivery_speed) VALUES
('TechGadgets', 123456, 2),
('FashionEmporium', 987654, 3),
('SportsHaven', 456789, 1),
('HomeEssentials', 321654, 4),
('ElectroWorld', 789012, 2),
('DigitalDreams', 345678, 3),
('GourmetDelights', 210987, 1),
('OutdoorAdventures', 876543, 4),
('HealthHub', 543210, 2),
('AutoZone', 123789, 3),
('PetParadise', 890123, 1),
('ToolTime', 456321, 4),
('MusicMasters', 789321, 2),
('ChocoDeluxe', 321789, 3),
('BeautyBoutique', 987321, 1),
('FurnitureFiesta', 654789, 4),
('JewelEmpire', 876123, 2),
('FitFiesta', 123987, 3),
('DriveGear', 789456, 1),
('LuxuryPets', 654012, 4),
('TechWonders', 345678, 2),
('GameGalore', 876543, 3),
('ApplianceAces', 123456, 1),
('FashionFiesta', 987654, 4),
('CulinaryCrafts', 210987, 2),
('AudioAvenue', 345678, 3),
('HomeHarmony', 876543, 1),
('FashionFusion', 123456, 4),
('TechTreasures', 789012, 2),
('TimelessTrends', 210987, 3),
('TasteTreats', 543210, 1),
('SportsStyle', 123789, 4),
('NatureNook', 678901, 2),
('OutdoorOasis', 789012, 3),
('HomeHues', 210987, 1),
('TechTrends', 345678, 4),
('GourmetGrove', 789012, 2),
('PetPalace', 210987, 3),
('ToolTech', 543210, 1),
('AudioAlchemy', 123789, 4),
('ChocoCharms', 876543, 2),
('BeautyBloom', 789012, 3),
('FurnitureFables', 210987, 1),
('JewelJunction', 543210, 4),
('FitFlair', 123789, 2),
('AutoAlley', 876543, 3),
('PetPleasures', 543210, 1),
('GourmetGlitz', 678901, 4),
('TechTemple', 789012, 2),
('GameGenius', 345678, 3),
('ApplianceAlcove', 210987, 1);
-- SELECT *FROM Seller;

CREATE TABLE User (
    User_ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Name VARCHAR(50) NOT NULL,
    Email_ID VARCHAR(50) UNIQUE NOT NULL,
    Address VARCHAR(50) NOT NULL,
    Phone_No VARCHAR(50) NOT NULL,
    Password VARCHAR(50) NOT NULL,
    Payment_Methods VARCHAR(50) NOT NULL
);

INSERT INTO User (Name, Email_ID, Address, Phone_No, Password, Payment_Methods) VALUES
('John Smith', 'john.smith@example.com', '123 Main St', '555-1234', 'secure123', 'Credit Card'),
('Alice Johnson', 'alice.johnson@example.com', '456 Oak St', '555-5678', 'password123', 'PayPal'),
('Michael Davis', 'michael.davis@example.com', '789 Pine St', '555-9101', 'userpass', 'Credit Card'),
('Emily Miller', 'emily.miller@example.com', '101 Elm St', '555-1122', 'mypassword', 'PayPal'),
('Christopher Wilson', 'christopher.wilson@example.com', '202 Maple St', '555-3344', 'pass123', 'Credit Card'),
('Olivia Moore', 'olivia.moore@example.com', '303 Cedar St', '555-5566', '12345678', 'PayPal'),
('Daniel Taylor', 'daniel.taylor@example.com', '404 Birch St', '555-7788', 'securepass', 'Credit Card'),
('Sophia Anderson', 'sophia.anderson@example.com', '505 Walnut St', '555-9900', 'user123', 'PayPal'),
('Matthew Thomas', 'matthew.thomas@example.com', '606 Cherry St', '555-1122', 'mypass123', 'Credit Card'),
('Ava White', 'ava.white@example.com', '707 Pine St', '555-3344', 'password', 'PayPal'),
('David Harris', 'david.harris@example.com', '808 Oak St', '555-5566', 'secure', 'Credit Card'),
('Emma Martin', 'emma.martin@example.com', '909 Elm St', '555-7788', 'pass', 'PayPal'),
('Liam Thompson', 'liam.thompson@example.com', '121 Main St', '555-9900', 'user', 'Credit Card'),
('Sophie Hall', 'sophie.hall@example.com', '232 Maple St', '555-1122', 'securepassword', 'PayPal'),
('Noah Wright', 'noah.wright@example.com', '343 Cedar St', '555-3344', 'userpass123', 'Credit Card'),
('Mia Turner', 'mia.turner@example.com', '454 Birch St', '555-5566', 'mypassword123', 'PayPal'),
('Ethan Collins', 'ethan.collins@example.com', '565 Walnut St', '555-7788', 'securepass123', 'Credit Card'),
('Isabella Adams', 'isabella.adams@example.com', '676 Cherry St', '555-9900', 'userpassword123', 'PayPal'),
('James Parker', 'james.parker@example.com', '787 Pine St', '555-1122', 'mypass', 'Credit Card'),
('Avery Garcia', 'avery.garcia@example.com', '898 Oak St', '555-3344', 'password1234', 'PayPal'),
('Sophia Evans', 'sophia.evans@example.com', '909 Elm St', '555-5566', 'secure1234', 'Credit Card'),
('Jackson Allen', 'jackson.allen@example.com', '101 Main St', '555-7788', 'user1234', 'PayPal'),
('Olivia Lee', 'olivia.lee@example.com', '212 Maple St', '555-9900', 'pass1234', 'Credit Card'),
('Logan Harris', 'logan.harris@example.com', '323 Cedar St', '555-1122', 'securepassword1234', 'PayPal'),
('Emma Wright', 'emma.wright@example.com', '434 Birch St', '555-3344', 'userpassword1234', 'Credit Card'),
('Carter Adams', 'carter.adams@example.com', '545 Walnut St', '555-5566', 'mypassword1234', 'PayPal'),
('Madison Turner', 'madison.turner@example.com', '656 Cherry St', '555-7788', 'pass12345', 'Credit Card'),
('Liam Rodriguez', 'liam.rodriguez@example.com', '767 Pine St', '555-9900', 'secure12345', 'PayPal'),
('Grace Miller', 'grace.miller@example.com', '878 Oak St', '555-1122', 'user12345', 'Credit Card'),
('Lucas Thompson', 'lucas.thompson@example.com', '989 Elm St', '555-3344', 'password12345', 'PayPal'),
('Aria Turner', 'aria.turner@example.com', '111 Main St', '555-5566', 'securepassword12345', 'Credit Card'),
('Benjamin Hall', 'benjamin.hall@example.com', '222 Maple St', '555-7788', 'userpassword12345', 'PayPal'),
('Ella Garcia', 'ella.garcia@example.com', '333 Cedar St', '555-9900', 'mypassword12345', 'Credit Card'),
('Caleb Wilson', 'caleb.wilson@example.com', '444 Birch St', '555-1122', 'pass123456', 'PayPal'),
('Hazel Collins', 'hazel.collins@example.com', '555 Walnut St', '555-3344', 'securepass123456', 'Credit Card'),
('Henry Adams', 'henry.adams@example.com', '666 Cherry St', '555-5566', 'userpass123456', 'PayPal'),
('Penelope Lee', 'penelope.lee@example.com', '777 Pine St', '555-7788', 'mypass123456', 'Credit Card'),
('Oliver Turner', 'oliver.turner@example.com', '888 Oak St', '555-9900', 'password123456', 'PayPal'),
('Luna Harris', 'luna.harris@example.com', '999 Elm St', '555-1122', 'securepassword123456', 'Credit Card'),
('Mason Wright', 'mason.wright@example.com', '123 Main St', '555-3344', 'userpassword123456', 'PayPal'),
('Aurora Parker', 'aurora.parker@example.com', '234 Maple St', '555-5566', 'mypassword123456', 'Credit Card'),
('Elijah Garcia', 'elijah.garcia@example.com', '345 Cedar St', '555-7788', 'pass1234567', 'PayPal'),
('Chloe Wright', 'chloe.wright@example.com', '456 Birch St', '555-9900', 'securepass1234567', 'Credit Card'),
('Leo Turner', 'leo.turner@example.com', '567 Walnut St', '555-1122', 'userpass1234567', 'PayPal'),
('Aubrey Collins', 'aubrey.collins@example.com', '678 Cherry St', '555-3344', 'mypassword1234567', 'Credit Card');

-- SELECT *FROM User;

CREATE TABLE Coupons (
    Coupon_ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Discount INT NOT NULL CHECK (Discount > 0),
    Expiry_date DATE NOT NULL,
    No_of_coupons_left INT NOT NULL,
    Unique_id INT NOT NULL,
    isUsed INT DEFAULT 0,
    FOREIGN KEY (Unique_id) REFERENCES User(User_ID) on DELETE CASCADE,
CONSTRAINT discount_pos CHECK (Discount > 0)
);

INSERT INTO Coupons (Discount, Expiry_date, No_of_coupons_left, Unique_id) VALUES
(10, '2024-12-31', 50, 1),
(15, '2024-11-30', 30, 2),
(20, '2024-10-31', 25, 3),
(25, '2024-09-30', 40, 4),
(30, '2024-08-31', 15, 5),
(35, '2024-07-31', 28, 6),
(40, '2024-06-30', 10, 7),
(45, '2024-05-31', 20, 8),
(50, '2024-04-30', 5, 9),
(15, '2024-03-31', 35, 10),
(20, '2024-02-28', 22, 11),
(25, '2024-01-31', 18, 12),
(30, '2023-12-31', 30, 13),
(35, '2023-11-30', 12, 14),
(40, '2023-10-31', 8, 15),
(45, '2023-09-30', 25, 16),
(50, '2023-08-31', 3, 17),
(15, '2023-07-31', 17, 18),
(20, '2023-06-30', 29, 19),
(25, '2023-05-31', 21, 20),
(30, '2023-04-30', 14, 21),
(35, '2023-03-31', 7, 22),
(40, '2023-02-28', 11, 23),
(45, '2023-01-31', 19, 24),
(50, '2022-12-31', 26, 25),
(15, '2022-11-30', 9, 26),
(20, '2022-10-31', 33, 27),
(25, '2022-09-30', 16, 28),
(30, '2022-08-31', 27, 29),
(35, '2022-07-31', 36, 30),
(40, '2022-06-30', 2, 31),
(45, '2022-05-31', 23, 32),
(50, '2022-04-30', 13, 33),
(15, '2022-03-31', 32, 34),
(20, '2022-02-28', 24, 35),
(25, '2022-01-31', 6, 36),
(30, '2021-12-31', 31, 37),
(35, '2021-11-30', 4, 38),
(40, '2021-10-31', 20, 39),
(45, '2021-09-30', 37, 40),
(50, '2021-08-31', 1, 41),
(15, '2021-07-31', 14, 42),
(20, '2021-06-30', 28, 43),
(25, '2021-05-31', 16, 44),
(30, '2021-04-30', 7, 45);

-- SELECT *FROM Coupons;

CREATE TABLE Billing_Details (
    Billing_Id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Payment_Mode VARCHAR(30) NOT NULL,
    Billing_Address VARCHAR(50) NOT NULL
);
INSERT INTO Billing_Details (Payment_Mode, Billing_Address) VALUES
('Credit Card', '123 Main Street, Cityville, USA'),
('PayPal', '456 Oak Avenue, Townsville, USA'),
('Debit Card', '789 Maple Lane, Villagetown, USA'),
('Cash on Delivery', '101 Pine Road, Hamletville, USA'),
('Google Pay', '202 Cedar Street, Boroughburg, USA'),
('Apple Pay', '303 Birch Boulevard, Settlement City, USA'),
('Venmo', '404 Elm Court, Metropolis, USA'),
('Bitcoin', '505 Willow Way, Junctionburg, USA'),
('Stripe', '606 Redwood Square, Hamletsville, USA'),
('Square', '707 Sycamore Lane, Downtown, USA'),
('Bank Transfer', '808 Pinecrest Avenue, Uptown, USA'),
('Amazon Pay', '909 Oakwood Drive, Riverside, USA'),
('Samsung Pay', '1010 Cedarwood Lane, Lakeside, USA'),
('MasterPass', '1111 Birchwood Road, Suburbia, USA'),
('Visa Checkout', '1212 Maplewood Circle, Summit City, USA'),
('American Express', '1313 Redwood Court, Plaza Park, USA'),
('Discover', '1414 Sycamore Street, Center City, USA'),
('Chase Pay', '1515 Elmwood Avenue, Capital Town, USA'),
('Walmart Pay', '1616 Willowwood Square, Downtown, USA'),
('Target Wallet', '1717 Pinecrest Boulevard, Metroville, USA'),
('Alipay', '1818 Cedar Lane, Village Center, USA'),
('WeChat Pay', '1919 Birch Street, Central Square, USA'),
('Square Cash', '2020 Oakwood Square, Uptown, USA'),
('Zelle', '2121 Sycamore Avenue, Lakeside, USA'),
('Western Union', '2222 Elmwood Drive, Junctionville, USA'),
('Cash App', '2323 Maple Circle, City Center, USA'),
('Neteller', '2424 Redwood Road, Districtville, USA'),
('Skrill', '2525 Cedarwood Court, Metroburg, USA'),
('Stripe Checkout', '2626 Willow Lane, Suburb Central, USA'),
('Barclaycard', '2727 Pine Street, Plaza Place, USA'),
('HSBC PayMe', '2828 Birchwood Way, Town Center, USA'),
('Capital One Wallet', '2929 Elm Square, Riverside, USA'),
('Square Reader', '3030 Oak Avenue, Boroughville, USA'),
('Venmo Card', '3131 Sycamore Road, Summit Square, USA'),
('Cash Card', '3232 Maple Lane, Capital Center, USA'),
('Revolut', '3333 Redwood Boulevard, Downtownville, USA'),
('TransferWise', '3434 Cedar Square, Uptown Center, USA'),
('Payoneer', '3535 Willowwood Place, Hamletburg, USA'),
('Paysafecard', '3636 Pinecrest Road, Metrotown, USA'),
('American Express Serve', '3737 Elmwood Place, City Square, USA'),
('Monzo', '3838 Birchwood Square, Villageville, USA'),
('Starbucks Card', '3939 Sycamore Avenue, Lakesideville, USA'),
('Cashier''s Check', '4040 Oakwood Circle, Junction City, USA'),
('Money Order', '4141 Cedar Boulevard, Metroburg, USA'),
('Wise (formerly TransferWise)', '4242 Willow Drive, Suburbia, USA'),
('Klarna', '4343 Redwood Place, Capitalburg, USA'),
('Venmo Mastercard', '4444 Maplewood Lane, Plaza Village, USA'),
('Affirm', '4545 Sycamore Square, Downtown Center, USA'),
('Sezzle', '4646 Elmwood Drive, Summit Square, USA'),
('QuadPay', '4747 Pinecrest Circle, City Center, USA'),
('Afterpay', '4848 Birchwood Avenue, Districtville, USA'),
('Shop Pay', '4949 Willow Lane, Boroughburg, USA'),
('Klarna Card', '5050 Oakwood Road, Metroville, USA');
-- SELECT *FROM Billing_Details;

CREATE TABLE Order_Table (
    Order_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Order_date_time DATETIME NOT NULL,
    Delivery_Address VARCHAR(50) NOT NULL,
    Order_Status VARCHAR(50) NOT NULL,
    Tracking_id INT NOT NULL,
    Unique_id INT NOT NULL,
    Billing_Id INT NOT NULL,
    Coupon_ID INT DEFAULT NULL,
    Total_Cost INT DEFAULT 0,
    FOREIGN KEY (Tracking_id) REFERENCES Order_Details(Tracking_id) on DELETE CASCADE,
    FOREIGN KEY (Unique_id) REFERENCES User(User_ID) on DELETE CASCADE,
    FOREIGN KEY (Billing_Id) REFERENCES Billing_Details(Billing_Id) on DELETE CASCADE,
    FOREIGN KEY (Coupon_ID) REFERENCES Coupons(Coupon_ID) ON DELETE SET NULL,
    CONSTRAINT cos_pos CHECK ( Total_Cost>=0)
);
INSERT INTO Order_Table (Order_date_time, Delivery_Address, Order_Status, Tracking_id, Unique_id, Billing_Id, Coupon_ID, Total_Cost) VALUES
('2024-02-12 10:30:00', '123 Main Street, Cityville', 'Processing', 1, 1, 1, 1, 200),
('2024-02-12 11:45:00', '456 Oak Avenue, Townsville', 'Shipped', 2, 2, 2, 2, 100),
('2024-02-12 12:15:00', '789 Maple Lane, Villagetown', 'Delivered', 3, 3, 3, 3, 1200),
('2024-02-12 13:30:00', '101 Pine Road, Hamletville', 'Processing', 4, 4, 4, NULL, 500),
('2024-02-12 14:45:00', '202 Cedar Street, Boroughburg', 'Cancelled', 5, 5, 5, NULL, 80),
('2024-02-12 15:15:00', '303 Birch Boulevard, Settlement City', 'Processing', 6, 6, 6, NULL, 150),
('2024-02-12 16:30:00', '404 Elm Court, Metropolis', 'Shipped', 7, 7, 7, 4, 800),
('2024-02-12 17:45:00', '505 Willow Way, Junctionburg', 'Delivered', 8, 8, 8, 5, 200),
('2024-02-12 18:15:00', '606 Redwood Square, Hamletsville', 'Processing', 9, 9, 9, 6, 300),
('2024-02-12 19:30:00', '707 Sycamore Lane, Downtown', 'Shipped', 10, 10, 10, 7, 120),
('2024-02-12 20:45:00', '808 Pinecrest Avenue, Uptown', 'Delivered', 11, 11, 11, 8, 300),
('2024-02-12 21:15:00', '909 Oakwood Drive, Riverside', 'Processing', 12, 12, 12, 9, 250),
('2024-02-12 22:30:00', '1010 Cedarwood Lane, Lakeside', 'Shipped', 13, 13, 13, 10, 50),
('2024-02-12 23:45:00', '1111 Birchwood Road, Suburbia', 'Delivered', 14, 14, 14, 11, 180),
('2024-02-13 10:30:00', '1212 Maplewood Circle, Summit City', 'Processing', 15, 15, 15, 12, 90),
('2024-02-13 11:45:00', '1313 Redwood Court, Plaza Park', 'Shipped', 16, 16, 16, 13, 200),
('2024-02-13 12:15:00', '1414 Sycamore Street, Center City', 'Delivered', 17, 17, 17, 14, 75),
('2024-02-13 13:30:00', '1515 Elmwood Avenue, Capital Town', 'Processing', 18, 18, 18, 15, 60),
('2024-02-13 14:45:00', '1616 Willowwood Square, Downtown', 'Shipped', 19, 19, 19, NULL, 120),
('2024-02-13 15:15:00', '1717 Pinecrest Boulevard, Metroville', 'Delivered', 20, 20, 20, NULL, 200),
('2024-02-13 16:30:00', '1818 Cedar Lane, Village Center', 'Processing', 21, 21, 21, NULL, 350),
('2024-02-13 17:45:00', '1919 Birch Street, Central Square', 'Shipped', 22, 22, 22, NULL, 30),
('2024-02-13 18:15:00', '2020 Oakwood Square, Uptown', 'Delivered', 23, 23, 23, NULL, 120);

-- SELECT *FROM Order_Table;
CREATE TABLE Inventory (
    Product_id INT PRIMARY KEY NOT NULL,
    Quantity INT CHECK (Quantity > 0) NOT NULL,
    Sale_Price INT NOT NULL,
    Cost_Price INT NOT NULL,
    FOREIGN KEY (Product_id) REFERENCES Product(Product_id)
);
INSERT INTO Inventory (Product_id, Quantity, Sale_Price, Cost_Price) VALUES
(1, 50, 30, 20),
(2, 100, 50, 40),
(3, 25, 15, 10),
(4, 75, 60, 45),
(5, 40, 25, 20),
(6, 60, 35, 30),
(7, 90, 70, 60),
(8, 20, 10, 8),
(9, 55, 45, 40),
(10, 80, 65, 50),
(11, 30, 20, 15),
(12, 15, 10, 8),
(13, 70, 55, 45),
(14, 45, 30, 25),
(15, 10, 8, 6),
(16, 50, 40, 35),
(17, 25, 18, 15),
(18, 35, 28, 22),
(19, 65, 50, 40),
(20, 5, 4, 3);
-- SELECT *FROM Inventory;

CREATE TABLE Cart (
    Unique_id INT PRIMARY KEY NOT NULL,
    Quantity INT CHECK (Quantity > 0) NOT NULL,
    FOREIGN KEY (Unique_id) REFERENCES User(User_ID)
);
INSERT INTO Cart (Unique_id, Quantity) VALUES
(1, 3),
(2, 5),
(3, 2),
(4, 1),
(5, 4),
(6, 6),
(7, 2),
(8, 3),
(9, 5),
(10, 1),
(11, 4),
(12, 2),
(13, 3),
(14, 5),
(15, 1),
(16, 2),
(17, 4),
(18, 6),
(19, 3),
(20, 1),
(21, 5),
(22, 2),
(23, 4),
(24, 6),
(25, 3),
(26, 1),
(27, 2),
(28, 5),
(29, 4),
(30, 3),
(31, 1),
(32, 6),
(33, 2),
(34, 4),
(35, 5),
(36, 3),
(37, 1),
(38, 2),
(39, 6),
(40, 4),
(41, 5),
(42, 3),
(43, 1),
(44, 2),
(45, 5);
-- SELECT *FROM Cart;

CREATE TABLE Category (
    Category_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Category_name VARCHAR(50) NOT NULL,
    Category_info VARCHAR(50),
    UNIQUE (Category_name)
);
INSERT INTO Category (Category_name, Category_info) VALUES
('Electronics', 'Devices and gadgets'),
('Clothing', 'Apparel and fashion accessories'),
('Home and Kitchen', 'Appliances and household items'),
('Sports and Outdoors', 'Sporting goods and outdoor equipment'),
('Books', 'Literature and reading materials'),
('Toys and Games', 'Children\'s toys and games'),
('Beauty and Personal Care', 'Cosmetics and personal grooming'),
('Furniture', 'Home and office furniture'),
('Jewelry', 'Accessories and precious metals'),
('Health and Fitness', 'Wellness and fitness products'),
('Automotive', 'Vehicle accessories and parts'),
('Pet Supplies', 'Products for pets and animals'),
('Tools and Home Improvement', 'Tools and home repair items'),
('Musical Instruments', 'Instruments and musical accessories'),
('Food and Beverages', 'Edible and drinkable items');
-- SELECT *FROM Category;

CREATE TABLE Items_contained (
    Unique_id INT NOT NULL,
    Product_id INT NOT NULL,
    Product_name VARCHAR(50) NOT NULL,
    Quantity INT CHECK (Quantity > 0) NOT NULL,
    PRIMARY KEY (Unique_id, Product_id),
    FOREIGN KEY (Unique_id) REFERENCES Cart(Unique_id) on DELETE CASCADE,
CONSTRAINT quan_pos CHECK (Quantity > 0)
);
INSERT INTO Items_contained (Unique_id, Product_id, Product_name, Quantity) VALUES
(1, 1, 'Laptop', 3),
(2, 2, 'Smartphone', 5),
(3, 3, 'Headphones', 2),
(4, 4, 'Smartwatch', 1),
(5, 5, 'Camera', 4),
(6, 6, 'Bluetooth Speaker', 6),
(7, 7, 'Gaming Console', 2),
(8, 8, 'Tablet', 3),
(9, 9, 'Fitness Tracker', 5),
(10, 10, 'Coffee Maker', 1),
(11, 11, 'Portable Charger', 4),
(12, 12, 'Drone', 2),
(13, 13, 'Smart TV', 3),
(14, 14, 'Printer', 5),
(15, 15, 'Virtual Reality Headset', 1),
(16, 16, 'Wireless Mouse', 2),
(17, 17, 'External Hard Drive', 4),
(18, 18, 'Desk Chair', 6),
(19, 19, 'Bluetooth Earbuds', 3),
(20, 20, 'Projector', 1);

-- SELECT *FROM Items_contained;

CREATE TABLE Items_purchased (
    Order_id INT NOT NULL,
    Product_id INT NOT NULL,
    Product_name VARCHAR(50) NOT NULL,
    Quantity INT  NOT NULL,
    Cost INT DEFAULT 0 ,
    PRIMARY KEY (Order_id, Product_id),
    FOREIGN KEY (Order_id) REFERENCES Order_Table(Order_id),
    FOREIGN KEY (Product_id) REFERENCES Product(Product_id),
    CONSTRAINT quant_pos CHECK ( Quantity> 0),
	CONSTRAINT cost_pos CHECK ( Cost>= 0)
);


DELIMITER $$
CREATE TRIGGER `setCoupon` BEFORE INSERT ON `Items_purchased`
FOR EACH ROW BEGIN
    DECLARE coupon_used INT;
    DECLARE order_id_temp INT;
    
    -- Get the Order_ID associated with the current row
    SET order_id_temp = (SELECT Order_id FROM Order_Table WHERE Order_id = NEW.Order_id);
    
    -- Check if the Order_ID is valid and get the Coupon_ID associated with the order
    IF order_id_temp IS NOT NULL THEN
        SET coupon_used = (SELECT Coupon_ID FROM Order_Table WHERE Order_id = NEW.Order_id);
    ELSE
        SET coupon_used = NULL;
    END IF;
    
    -- Update the Coupons table to mark the coupon as used if Coupon_ID is not null
    IF coupon_used IS NOT NULL THEN
        UPDATE Coupons SET isUsed = 1 WHERE Coupon_ID = coupon_used;
    END IF;
END $$
DELIMITER ;

INSERT INTO Items_purchased (Order_id, Product_id, Product_name, Quantity, Cost) VALUES
(1, 1, 'Laptop', 2, 2000),
(2, 3, 'Running Shoes', 1, 100),
(3, 5, 'Smartphone', 3, 1200),
(4, 2, 'Gaming Console', 1, 500),
(5, 4, 'Coffee Maker', 2, 80),
(6, 6, 'Bluetooth Speaker', 1, 150),
(7, 8, 'Digital Camera', 2, 800),
(8, 10, 'Fitness Tracker', 1, 120),
(9, 12, 'Vacuum Cleaner', 1, 250),
(10, 14, 'Wrist Watch', 2, 300),
(11, 16, 'Blender', 1, 50),
(12, 18, 'Wireless Earbuds', 3, 180),
(13, 20, 'Portable Hard Drive', 1, 90),
(14, 22, 'Sunglasses', 2, 200),
(15, 24, 'Dumbbell Set', 1, 75),
(16, 26, 'Desk Lamp', 2, 60),
(17, 28, 'Air Fryer', 1, 120),
(18, 30, 'Coffee Table', 1, 200),
(19, 32, 'Outdoor Grill', 2, 350),
(20, 34, 'Yoga Mat', 1, 30),
(21, 36, 'Hiking Backpack', 3, 180),
(22, 38, 'Curling Iron', 1, 40);
-- SELECT *FROM Items_purchased;

CREATE TABLE BelongsTo (
    Product_id INT NOT NULL,
    Category_id INT NOT NULL,
    PRIMARY KEY (Product_id, Category_id),
    FOREIGN KEY (Product_id) REFERENCES Product(Product_id),
    FOREIGN KEY (Category_id) REFERENCES Category(Category_id)
);

INSERT INTO BelongsTo (Product_id, Category_id) VALUES
(1, 3),
(2, 7),
(3, 2),
(4, 6),
(5, 1),
(6, 4),
(7, 5),
(8, 8),
(9, 10),
(10, 1),
(11, 6),
(12, 2),
(13, 5),
(14, 9),
(15, 1),
(16, 4),
(17, 6),
(18, 10),
(19, 5),
(20, 1),
(21, 7),
(22, 2),
(23, 6),
(24, 8),
(25, 3),
(26, 1),
(27, 4),
(28, 7),
(29, 6),
(30, 3),
(31, 1),
(32, 9),
(33, 2),
(34, 6),
(35, 5),
(36, 3),
(37, 1),
(38, 4),
(39, 9),
(40, 6),
(41, 5),
(42, 3),
(43, 1),
(44, 7),
(45, 2);
-- SELECT *FROM BelongsTo;
drop view if exists userProductView;
drop view if exists categoryUserView;
drop view if exists protectedUserView;
drop view if exists usableCouponView;
-- Create a view to display products for a specific user
CREATE VIEW userProductView  AS
SELECT
    Product_id,
    Product_name,
    Product_cost,
    Product_Description,
    Rating,
    Brand_id
FROM
    Product;
    
-- SELECT * FROM userProductView;

-- Create a view to display categories for a user
CREATE VIEW categoryUserView  AS
SELECT DISTINCT U.User_ID, C.Category_id, C.Category_name
FROM User U
JOIN Order_Table OT ON U.User_ID = OT.Unique_id
JOIN Items_purchased IP ON OT.Order_id = IP.Order_id
JOIN Product P ON IP.Product_id = P.Product_id
JOIN BelongsTo B ON P.Product_id = B.Product_id
JOIN Category C ON B.Category_id = C.Category_id;
-- SELECT * FROM categoryUserView;
-- Create a view to display users with admin privileges
CREATE VIEW protectedUserView  AS
SELECT
    u.User_ID,
    u.Name,
    u.Email_ID,
    u.Address,
    u.Phone_No,
    u.Payment_Methods
FROM
    User u
JOIN
    Admin a ON u.User_ID = a.Admin_id;
-- SELECT * FROM protectedUserView;

-- Create a view for Usable Coupons
CREATE VIEW usableCouponView  AS
SELECT *
FROM Coupons
WHERE isUsed = 1 AND Expiry_date >= CURDATE();
-- SELECT * FROM usableCouponView;

-- Create unique index on category_name in Category table
CREATE UNIQUE INDEX categoryname ON Category(Category_name);

-- Create index on Delivery_speed in Seller table
CREATE INDEX shipperspeed ON Seller(Delivery_speed);

-- Create index on brand_name in Brand table
CREATE INDEX brandn ON Brand(Brand_name);

-- Create unique index on product_id in Product table
CREATE UNIQUE INDEX prod_id ON Product(Product_id);

-- Create unique index on (product_name, brand_name) in Product table
CREATE UNIQUE INDEX product_name_brand_name ON Product(Product_name, Brand_id);

-- Create index on billing_id in Billing_Details table
CREATE INDEX billing ON Billing_Details(Billing_Id);

-- Create unique index on (Email_ID, Password) in User table
CREATE UNIQUE INDEX username_password ON User(Email_ID, Password);

-- Create unique index on (Unique_id, Product_ID, Quantity) in Items_contained table
CREATE UNIQUE INDEX items_contained_index ON Items_contained(Unique_id, Product_id, Quantity);

-- Create user_role for customers
CREATE ROLE IF NOT EXISTS user_role;
GRANT SELECT ON eCartBazzar.usableCouponView TO user_role;
GRANT SELECT ON eCartBazzar.userProductView TO user_role;
GRANT SELECT ON eCartBazzar.categoryUserView TO user_role;
GRANT SELECT, UPDATE ON eCartBazzar.inventory TO user_role;
GRANT SELECT, UPDATE, INSERT, DELETE ON eCartBazzar.items_purchased TO user_role;
GRANT SELECT, UPDATE, INSERT, DELETE ON eCartBazzar.order_table TO user_role;
GRANT SELECT ON eCartBazzar.seller TO user_role;
GRANT SELECT, INSERT, UPDATE, DELETE ON eCartBazzar.billing_details TO user_role;
GRANT SELECT ON eCartBazzar.belongsto TO user_role;
GRANT SELECT ON eCartBazzar.product TO user_role;
GRANT SELECT ON eCartBazzar.brand TO user_role;
GRANT SELECT ON eCartBazzar.category TO user_role;
GRANT SELECT, UPDATE, INSERT, DELETE ON eCartBazzar.items_contained TO user_role;
GRANT SELECT ON eCartBazzar.cart TO user_role;
GRANT SELECT, UPDATE ON eCartBazzar.coupons TO user_role;
GRANT SELECT ON eCartBazzar.user TO user_role;
GRANT SELECT ON eCartBazzar.protectedUserView TO user_role;

-- Create admin_role for admins
CREATE ROLE IF NOT EXISTS admin_role;

-- Grant permissions to admin_role
GRANT ALL ON eCartBazzar.user TO admin_role;
GRANT ALL ON eCartBazzar.coupons TO admin_role;
-- Not granting admin any data related to cart and order
GRANT ALL ON eCartBazzar.category TO admin_role;
GRANT ALL ON eCartBazzar.brand TO admin_role;
GRANT ALL ON eCartBazzar.product TO admin_role;
GRANT ALL ON eCartBazzar.belongsto TO admin_role;
GRANT ALL ON eCartBazzar.billing_details TO admin_role;
-- For the time being, an admin does not have to write alter on other admins
GRANT SELECT ON eCartBazzar.admin TO admin_role;
GRANT ALL ON eCartBazzar.seller TO admin_role;
GRANT SELECT, UPDATE, INSERT, DELETE, CREATE, DROP ON eCartBazzar.order_table TO admin_role;
GRANT SELECT, UPDATE, INSERT, DELETE, CREATE, DROP ON eCartBazzar.items_purchased TO admin_role;
GRANT ALL ON eCartBazzar.inventory TO admin_role;
GRANT ALL ON eCartBazzar.userProductView TO admin_role;
GRANT ALL ON eCartBazzar.categoryUserView TO admin_role;
GRANT ALL ON eCartBazzar.protectedUserView TO admin_role;
GRANT ALL ON eCartBazzar.usableCouponView TO admin_role;

-- Set SQL mode
SET GLOBAL sql_mode = (SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));
SET SESSION sql_mode = (SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));





