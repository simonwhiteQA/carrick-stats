<?php
$servername = "213.171.200.98";
$username = ""; // For MYSQL the predifined username is root
$password = ""; // For MYSQL the predifined password is " "(blank)
//$database = "carrickdb"; // For MYSQL the predifined password is " "(blank)

// Create connection
$conn = new mysqli($servername, $username, $password);
 
// Check connection

 if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

echo "you connected!";

?>