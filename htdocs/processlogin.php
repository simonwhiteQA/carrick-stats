<?php
session_start();

include("../connection/connection.php");

$username = $_POST['username'];
$password = $_POST['password'];

$check = "SELECT * FROM `carrickdb.security` WHERE username=`$username` AND password=`$password`";

echo $username;
echo $password;
echo $check;

$result = $conn->query($check);
echo $result;

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $num = $result->num_rows;
        
        if($num > 0) {
            echo "You are a valid user";
        } else {
            echo "You are not a valid user";
        }
        
        ?>
    </body>
</html>

