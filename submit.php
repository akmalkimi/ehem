<?php
// Database connection
$servername = "localhost";
$username = "root"; // Your database username
$password = "root"; // Your database password
$dbname = "crush"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$favoriteDrink = $_POST['favoriteDrink'];
$relaxPlace = $_POST['relaxPlace'];
$cuteReason = $_POST['cuteReason'];
$confession = $_POST['confession'];
$dayToday = $_POST['dayToday']; // New field

// Insert data into database
$sql = "INSERT INTO responses (favoriteDrink, relaxPlace, cuteReason, confession, dayToday)
        VALUES ('$favoriteDrink', '$relaxPlace', '$cuteReason', '$confession', '$dayToday')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you! Your responses have been saved.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
