<?php
// Server credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gangzee";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $sub = $_POST["sub"];
    $msg = $_POST["msg"];
    
    // Prepare and execute the SQL query
    $stmt = $conn->prepare("INSERT INTO admin_feedback (name, email, sub, msg) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $sub, $msg);
    $stmt->execute();    
    
    // Close the statement
    $stmt->close();
    
    // Redirect to a success page
    header("Location: index.php");
    exit();
}

// Close the connection
$conn->close();
?>
