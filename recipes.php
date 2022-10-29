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

 

function getRecipeDetailsFromDatabase() {
    include_once 'db_connect.php';
    $sql = 'SELECT id, title, name_of_dish FROM Recipes';
    mysql_select_db('book_recipe');
    $retval = mysql_query( $sql, $conn ); 

if(! $retval ) {
   die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_assoc($retval)) {
   echo "EMP ID :{$row['emp_id']}  <br> ".
      "EMP NAME : {$row['emp_name']} <br> ".
      "EMP SALARY : {$row['emp_salary']} <br> ".
      "--------------------------------<br>";
}

echo "Fetched data successfully\n";

mysql_close($conn); 


?>


 


<?php
        include "navigation.php";
        include "footer.php";
    
    ?>




   


</body>
</html> 