<?php
require_once 'connect.php';
// Retrieving form data using the $_POST superglobal
 // Last name submitted via a form
$eMail = $_POST['eMail']; // Email submitted via a form
$password = $_POST['password']; // Password submitted via a form

// Constructing an SQL query for inserting data into the database
$select = "SELECT * FROM register_tbl(first_name, last_name, e_mail, pass_word) WHERE VALUES ('$eMail' && '$password';

// Executing the insertion query

$result = $connect->query ($select);

if (mysqli_num_rows($result) == 1) {
        echo "Login successful!";
       
}
?>