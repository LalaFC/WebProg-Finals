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
$email = $_POST['email'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phoneNum = $_POST['phoneNum'];
$address = $_POST['address'];

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: register.html?error=invalid_email_format");
    exit();
}

// Check if email already exists
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Email already exists
    header("Location: Location: HomePage.php#registerPage?error=email_exists");
    exit();
} else {
    // Email doesn't exist, insert into database
    $sql = "INSERT INTO users (`First_Name`, `Last_Name`, `Password`, `Email`, `Contact_Number`, `Address`) 
    VALUES ('$fname', '$lname', '$password', '$email', '$phoneNum', '$address')";

    if ($conn->query($sql) === TRUE) {
        header("Location: HomePage.php#registerPage?registration_success=true");
        exit();
    } else {
        header("Location: HomePage.php#registerPage?error=registration_failed");
        exit();
    }
}

// Close connection
$conn->close();
?>