<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $course = htmlspecialchars($_POST['course']);
    $address = htmlspecialchars($_POST['address']);

    echo "
    <div style='background:#f7f7f7; padding:20px; border-radius:10px;'>
        <h3 style='color:#4CAF50;'>Registration Successful!</h3>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Gender:</strong> $gender</p>
        <p><strong>Course:</strong> $course</p>
        <p><strong>Address:</strong> $address</p>
    </div>";
} else {
    echo "<p style='color:red;'>Invalid Request</p>";
}
?>
