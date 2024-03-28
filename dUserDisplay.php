<?php 
// connects us to the connect styring thta connects us to the db
require_once 'connect.php';

//$selectUsers ="SELECT * FROM students";// variable sql statement to pick data from table
// variable result which associates using the query built in function to  connect string to the  sql stmnt variable we created
//$result = $connect->query($selectUsers);//the one in () is the sql stnmt we want to execute
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
  <h2>RECENTLY REGISTERED  TOURISTS</h2>  
  <table border ="1">
    <thead>
        <tr>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
</tr>
</thead>
<tbody>
     <?php // initiate php
   # php below because we want this data to be displayed below the heading.
   #if condition result  variable with its number of rows >0
   // a while loop infinite in nature(cant estimate no. of pipo it will register)
    // variable row has fetch_assoc w(it actually carries out the fetching)in an associative array format
    $selectUsers ="SELECT * FROM register_tbl";
    $result = $connect->query($selectUsers);
   if ($result->num_rows> 0) {
    while($row =$result->fetch_assoc()){
        echo "<tr><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td></tr>";
    }
   }


   // we want connect string to close after users have been displayed thtas why its the last one
   $connect->close();

   ?>
   </tbody>
</table>
  <p><a href="index.html"> BACK TO HOME</a></p>
</body>
</html>