<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learning";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $class = $_POST['class'];
    $created_at = $_POST['created_at'];

    // Validate that the user selected a class
    if ($class === "Select A Class") {
        echo "Please select a valid class.";
        exit;
    }

    // Insert data into table
    $sql = "INSERT INTO seatbook (name, email, mobile, class, created_at) VALUES ('$name', '$email', '$mobile', '$class', '$created_at')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking successful.'); window.location.href = 'index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
