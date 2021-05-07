<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h2>Thnaks.</h2>
    <p>Your data has been successfully recorded</p> -->
    <!-- <p>Your name: <?=$_GET["first"] . " " . $_GET["last"];?></p> -->
    <!--  -->
<?php

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    $name  = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    echo "<h1>Your Data has been recorded successfully.</h1>";
    echo "<div>Name :{$name} Email :{$email} phone :{$phone}</div>";
} else {
    echo "<p>contact with your developer</p>";
}

?>
<a href="Day_07_form_handling.php">Go Back</a>
</body>
</html>