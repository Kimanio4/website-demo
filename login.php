<?php
// Step 1: Connect to the database
$servername = "localhost";
$username = "root"; 
$password = "kimani"; 
$dbname = "fuel";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Step 3: Validate user's credentials
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Step 4: Log in the user (for example, set session variables)
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;

    // Redirect the user to a dashboard or another page
    header("Location: dashboard.php"); // Change the URL to your dashboard page
} else {
    // If credentials are invalid, display an error message
    echo "Invalid credentials. Please try again.";
}

// Step 5: Close the database connection

?>
