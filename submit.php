<?php
// Database configuration
$servername = "localhost";
$username = "yvequizo";  // Replace with your MySQL username
$password = "vequizo";  // Replace with your MySQL password
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$address = $_POST['address'];
$courseandsec = $_POST['courseandsec'];

// Insert data into the `form` table
$sql = "INSERT INTO form (fname, mname, lname, age, address, courseandsec) VALUES ('$firstname', '$middlename', '$lastname', '$age', '$address', '$courseandsec')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
