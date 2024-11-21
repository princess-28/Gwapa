<?php
// Database connection settings
$servername = "localhost";
$username = "root"; // Replace with your DB username
$password = "";     // Replace with your DB password
$dbname = "form_data";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $firstname = $conn->real_escape_string($_POST['Firstname']);
    $middle = $conn->real_escape_string($_POST['Middle']);
    $lastname = $conn->real_escape_string($_POST['Lastname']);
    $age = intval($_POST['Age']);
    $address = $conn->real_escape_string($_POST['Address']);
    $course_section = $conn->real_escape_string($_POST['CourseAndSection']);

    // Insert data into the database
    $sql = "INSERT INTO users (firstname, middle, lastname, age, address, course_section)
            VALUES ('$firstname', '$middle', '$lastname', $age, '$address', '$course_section')";

if ($conn->query($sql) === TRUE) {
    // Redirect to view_table.php after successful submission
    header("Location: table.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// Close the connection
$conn->close();
?>
