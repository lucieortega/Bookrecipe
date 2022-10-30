<!DOCTYPE html>

<html>

<link rel="stylesheet" type="text/css" href="style.css"/>


<title>Chelsea Johnson and Lucie Ortega</title>

<head>
    <div id = "header">
        <h1>Recipe of the Day</h1>
    </div>
</head>

<h3>...and then some</h3>


<body>

<?php




    include_once 'db_connect.php';
    $query = "SELECT * FROM 'Recipes';"; 
    $result = $conn->query($query);
        
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "ID: " .
            $row["ID"]. " - Title: " .
            $row["Title"] . " Name_of_dish: " .
            $row["Name_of_dish"] . " date: " .
            $row["date"] . "<br>";
        }
    } 
    else {
        echo "0 results";
    }

?>


 


<?php
        include "navigation.php";
        include "footer.php";
    
    ?>




   


</body>
</html> 