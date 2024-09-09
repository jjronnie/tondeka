<?php
require_once 'connect.php';
// Retrieving form data using the $_POST method  to push data in the database using the name property
$firstName = $_POST['firstName']; // First name submitted via a form
$lastName = $_POST['lastName']; // Last name submitted via a form
$eMail = $_POST['eMail']; // Email submitted via a form
$password = $_POST['password']; // Password submitted via a form

// Constructing an SQL query for inserting data into the database
$insert = "INSERT INTO register_tbl(first_name, last_name, e_mail, pass_word) VALUES('$firstName','$lastName', '$eMail', '$password')";

// Executing the insertion query
$insertData = $connect->query($insert);


if($connect == true && $insertData == TRUE){
    echo "<script>alert('database connection successful and data inserted successfully');</script>";
}
?>