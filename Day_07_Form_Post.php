<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
       Favourite Food: <input type="text" name="food"/>
       <br><br>
       Favourite Color: <input type="text" name="color"/>
       <br><br>
       <input type="submit" value="Submit">
       <p>Your favourite food: <?php echo $_POST["food"] ?></p>
       <p>Your favourite color: <?=$_POST["color"]?></p>
    </form>
</body>
</html>