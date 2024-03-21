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

// Process search query
if (isset($_GET['query'])) {
    $search_query = $_GET['query'];

// database insert SQL code
$sql = "SELECT * FROM Product_List WHERE product_name LIKE '%$search_query%'
OR product_type Like '%$search_query%'";
$result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo
            '<div class="food-menu-item">' .
                '<div class="food-img">' .
                    '<img src="Images/' . $row["Image"] . '" alt="' . $row["Image"] . '" />' .
                '</div>' .
                '<div class="food-description">' .
                    '<h2 class="food-title">' . $row["Product_Name"] . '</h2>' .
                    '<p>' .
                        $row["Description"] .
                    '</p>' .
                    '<p class="food-price">Price: PHP ' . $row["Price"] . '</p>' .
                    
                '</div>' .
            '</div>';
        }
    } else {
        echo "0 results";
    }
}

// Close connection
$conn->close();
?>
