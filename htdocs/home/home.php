<?php
session_start();

if (!isset($_SESSION['carrick-stats'])) {
    //move browser to log.php (login)
    header("Location: ../index.html");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
</head>

<script>  
$(function(){ 
  $("#header").load("../header.html");  
  $("#footer").load("../footer.html");  
}); 
</script> 

<div id="header"></div>

<body class="d-flex flex-column min-vh-100">

<div class="jumbotron text-center">
    <h1>My First Bootstrap Page</h1>
    <p>Resize this page to see the responsive effect!</p>
  </div>

</body>

<div id="footer"></div>

</html>