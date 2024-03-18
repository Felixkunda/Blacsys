<?php
// Database connection parameters
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "blacsys"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$leadSource = $_POST['leadSource'];
$leadStatus = $_POST['leadStatus'];
$additionalInformation = $_POST['additionalInformation'];

// SQL query to insert lead information into the leads table
$sql = "INSERT INTO leads (name, email, city, lead_source, lead_status, additional_information) 
        VALUES ('$name', '$email', '$city', '$leadSource', '$leadStatus', '$additionalInformation')";

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "Lead information inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
