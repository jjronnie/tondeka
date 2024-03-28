<?php 
// connects us to the connect string that connects us to the db
require_once 'insert.php';

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
    $selectUsers ="SELECT * FROM register_tbl";
    $result = $connect->query($selectUsers);
   if ($result->num_rows> 0) { #if condition ststemet result  variable with its number of rows >0
    // variable row has fetch_assoc which actually carries out the fetching)in an associative array format
    while($row =$result->fetch_assoc()){  // a while loop infinite in nature(cant estimate no. of pipo it will register
        // an echo to display data in a table format in table row and data
        echo "<tr><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td></tr>";
    }
   }


   // we want connect string to close after users have been displayed thats why its the last one
   $connect->close();

   ?>
   </tbody>
</table>
  <p><a href="index.html"> BACK TO HOME</a></p>
</body>
</html>