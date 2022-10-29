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


function getRecipeDetailsFromDatabase () {
    include_once 'db_connect.php';
    $sql = 'SELECT id, title, name_of_dish FROM Recipes'; 


while($row = mysqli_fetch_assoc($retval)) { 
   echo "id :{$row['id']}  <br> ".
      "title : {$row['title']} <br> ".
      "name of dish : {$row['name_of_dish']} <br> ".
      "--------------------------------<br>";
} 

echo "Fetched data successfully\n";

mysqli_close($conn); 


}

?>


 


<?php
        include "navigation.php";
        include "footer.php";
    
    ?>




   


</body>
</html> 