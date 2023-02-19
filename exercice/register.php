<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullname = $_POST['fullname'];
$username = $_POST['Username'];
$password = $_POST['Password'];
$confirm = $_POST['ConfirmPassword'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$date_birth = $_POST['DateBirth'];
$security_number = $_POST['SecurityNumber'];

// Insert data into table
$sql = "INSERT INTO users (Full_name, Username, Password,Confirm_password, Email, Phone, Date_Birth, Security_Number)
VALUES ('$fullname', '$username', '$password','$confirm', '$email', '$phone', '$date_birth', '$security_number')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
