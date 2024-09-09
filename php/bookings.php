<?php
require_once 'connect.php';
// Retrieving form data using the $_POST superglobal
$Tname = $_POST['Tname']; // First name submitted via a form
$Temail = $_POST['Temail']; // Last name submitted via a form
$tour_date = $_POST['tour_date']; // Email submitted via a form
$destination = $_POST['destination']; // Password submitted via a form

// Constructing an SQL query for inserting data into the database
$bookinsert = "INSERT INTO booking_tbl(tourist_name,e_mail,tour_date,destination) VALUES('$Tname','$Temail','$tour_date','$destination')";

// associating insertion query to the connect string
$Datainserted = $connect->query($bookinsert);

if($connect == true && $Datainserted == TRUE){
    echo "<script>alert('YOUR BOOKING HAS BEEN RESERVED. Thank You for entrusting Horizon Tours');</script>";
}
?>