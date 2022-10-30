
<?php

$dbServername = "localhost";
$dbUsername = "root"; //This is the same username as phpMyAdmin
$dbPassword = "root"; //This is the same password as phpMyAdmin
$dbName = "book_recipe";

//Create connection
$conn = new mysqli ($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>

