
<?php

$dbServername = "localhost";
$dbUsername = "root"; //This is the same username as phpMyAdmin
$dbPassword = "root"; //This is the same password as phpMyAdmin
$dbName = "book_recipe";

//Create connection
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT id, title, nameofdish, FROM Recipes";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
// while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. "title: " . $row["nameofdish"]. "<br>";
// }
// }   else {
//     echo "0 results";
// }
// $conn->close();
?>

