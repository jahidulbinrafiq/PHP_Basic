<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="" method="GET">
country: <input type="text" name="country"/>
<br><br>
Language: <input type="text" name="language"/>
<br><br>

<input type="submit" value="Submit">
</form>
<br>
<p>Your Language:<?=$_GET["language"];?> </p>
<P>Your Country:<?php echo $_GET["country"]; ?> </P>

<a href="#">Reset</a>
</body>
</html>