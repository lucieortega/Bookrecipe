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
    $sql = 'SELECT id, title, name_of_dish FROM recipes'; 
    $result = mysqli_query($conn, $sql);
        
    //Get each result row as an assoc array, then add details to $recipeDetails
    $recipeDetails = array();
    while($row = mysqli_fetch_assoc($result)){
        array_push($recipeDetails,$row['title']);
    }
    return $recipeDetails;

}









?>


 


<?php
        include "navigation.php";
        include "footer.php";
    
    ?>




   


</body>
</html> 