<?php
// Database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "your_database"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process search query
if (isset($_GET['query'])) {
    $search_query = $_GET['query'];

    // SQL query to search for matching records
    $sql = "SELECT * FROM your_table WHERE column_name LIKE '%$search_query%'";
    $result = $conn->query($sql);

    // Display search results
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Output search results here
            echo "Result: " . $row['column_name'] . "<br>";
        }
    } else {
        echo "No results found.";
    }
}

// Close connection
$conn->close();
?>
