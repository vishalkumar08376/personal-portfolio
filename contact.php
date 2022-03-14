<?php
session_start();
$conn = mysqli_connect("127.0.0.1", "root", "vishal10607", "vishal_portfolio");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
};

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contact VALUE ('$name', '$email', '$message')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Something went wrong!!";
    return;
}

echo "Submitted Successfully!!"
?>