<?php
// Database configuration
$servername = "localhost"; // Change this to your database server name
$username = "your_username"; // Change this to your database username
$password = "your_password"; // Change this to your database password
$database = "your_database"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to insert fuel names
$sql = "INSERT INTO fuel (name) VALUES
('Gasoline'),
('Diesel'),
('Biodiesel'),
('Propane'),
('Heating Oil (Kerosene)'),
('Ethanol'),
('Methanol'),
('Aviation Fuel'),
('Natural Gas'),
('Hydrogen')";

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "Fuel names inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
