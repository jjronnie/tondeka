<?php
// // Connect to the database
// $conn = mysqli_connect("localhost", "username", "password", "database_name");

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }


require_once 'connect.php'; 

// Handle login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Mail'];
    $password = $_POST['Password'];

    // Query to check if user exists
    $logFetch = "SELECT * FROM register_tbl WHERE e_mail='$email' AND pass_word ='$password'";
    $result = $connect->query ($logFetch);

    // If result exists, login successful
    if (mysqli_num_rows($result) == 1) {
        echo "Login successful!";
        // Redirect to the homepage or any other page
        header("Location: loginDisplay.php");
        exit();
    } else {
        echo "Invalid email or password";
    }
}
?>
