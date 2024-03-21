<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

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
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare SQL statement
$stmt = $conn->prepare("SELECT * FROM users WHERE email=? AND password=?");
$stmt->bind_param("ss", $email, $password);

// Execute the statement
$stmt->execute();

// Get result
$result = $stmt->get_result();

// Check if user exists
if ($result->num_rows > 0) {
    // User exists, create session
    $row = $result->fetch_assoc();
    // Store username in session
    $_SESSION['userID'] = $row['User_ID'];
    $_SESSION['name'] = $row['First_Name'];
    $_SESSION['lname'] = $row['Last_Name'];
    $_SESSION['address'] = $row['Address'];
    $_SESSION['contacts'] = $row['Contact_Number'];
    $_SESSION['email'] = $email;
    header("Location: LoggedHomePage.php"); // Redirect to welcome page
} else {
    // Invalid email or password
    echo "Invalid email or password. <a href='HomePage.php?#registerPage'>Try again</a>";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>