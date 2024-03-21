<?php
// Database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "papsie_burger"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get email and password from form
$productID = $_POST['productID'];
$userID = $_POST['userID'];
$quantity = $_POST['quantity'];

// Check if email already exists
$sql = "SELECT * FROM cart_list WHERE Product_ID='$productID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $quantity = intval($row["Number"]) + intval($quantity);
    $sql =  "UPDATE `cart_list` SET `Number` = $quantity WHERE `cart_list`.`Product_ID` = $productID AND `cart_list`.`User_ID` = $userID";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Successfully Added!");</script>';
        exit();
    } else {
        echo '<script>alert("Adding Failed. Please Try Again.");</script>';
        exit();
    }

} else {
    // Email doesn't exist, insert into database
    $sql = "INSERT INTO cart_list (`Product_ID`, `Number`, `User_ID`) 
    VALUES ($productID, $quantity, $userID)";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Successfully Added!");</script>';
        exit();
    } else {
        echo '<script>alert("Adding Failed. Please Try Again.");</script>';
        exit();
    }
}

// Close connection
$conn->close();
?>