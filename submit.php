<?php
// Start output buffering
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database credentials
$servername = "sql307.infinityfree.com";
$username = "if0_40366231";
$password = "RmWwqhCH1am46i";
$database = "if0_40366231_student_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['fullname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $course = $_POST['course'];
  $address = $_POST['address'];

  $sql = "INSERT INTO student (fullname, email, phone, gender, course, address)
          VALUES ('$name', '$email', '$phone', '$gender', '$course', '$address')";

  if ($conn->query($sql) === TRUE) {
    // Clean any previous output
    ob_clean();
    header("Location: success.php");
    exit();
  } else {
    echo "Error: " . $conn->error;
  }
}

// Close connection
$conn->close();

// End output buffering
ob_end_flush();
?>