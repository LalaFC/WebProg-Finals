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
$userID= $_POST['userID'];

// Check if email already exists
$sql = "SELECT * FROM cart_List WHERE User_ID = $userID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productID = $row['Product_ID'];
        $quantity = $row['Number'];
        $cartID = $row['Cart_ID'];
        // Insert each cart item into orders_list table
        $insertSql = "INSERT INTO orders_list (`User_ID`, `Product_ID`, `orderQuantity`) 
                      VALUES ($userID, $productID, $quantity)";
        if ($conn->query($insertSql) !== TRUE) {
            // Handle insert error here
            echo "Error: " . $insertSql . "<br>" . $conn->error;
        }
    }
    // Execute delete query after inserting all items
    $deleteSql = "DELETE FROM cart_list WHERE User_ID = $userID";
    if ($conn->query($deleteSql) === TRUE) {
        echo '<script>alert("Delivering Now. Thank you for Buying.");</script>';
        echo '<script>window.location.href = "LoggedHomePage.php";</script>';
        exit();
    } else {
        // Handle delete error here
        echo "Error: " . $deleteSql . "<br>" . $conn->error;
    }
}
 else {
    {
        echo '<script>alert("Empty Cart. Please Order First");</script>';
        echo '<script>window.location.href = "LoggedHomePage.php";</script>';        exit();
    }
}

// Close connection
$conn->close();
?>