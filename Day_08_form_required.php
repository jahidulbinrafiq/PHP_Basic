<?php
$nameErr = $emailErr = $genderErr = "";
$name    = $email    = $website    = $comment    = $gender    = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

    if ( empty( $_POST['name'] ) ) {
        $nameErr = "Name is required";
    } else {
        $name = verifyInput( $_POST['name'] );
    }

    if ( empty( $_POST['email'] ) ) {
        $emailErr = "Email is required";
    } else {
        $email = verifyInput( $_POST['email'] );
    }

    if ( empty( $_POST['gender'] ) ) {
        $genderErr = "Gender is required";
    } else {
        $gender = verifyInput( $_POST['gender'] );
    }

    $website = verifyInput( $_POST['website'] );
    $comment = verifyInput( $_POST['comment'] );
}

function verifyInput( $data ) {
    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    return $data;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Required</title>
    <style>
      .error{
          color: red;
      }
    </style>
</head>
<body>
<form action="<?=htmlspecialchars( $_SERVER['PHP_SELF'] );?>" method="post">
   Name: <input type="text" name="name" id="">
   <span class="error">*<?=$nameErr;?></span>
   <br><br>
   Email: <input type="email" name="email" id="">
   <span class="error">*<?=$emailErr;?></span>
   <br><br>
   Website: <input type="url" name="website" id="">
   <br><br>
   Comment: <textarea name="comment" id="" cols="30" rows="10"></textarea>
   <br><br>
   Genders: <input type="radio" name="gender" id="">Male
            <input type="radio" name="gender" id="">Female
            <span class="error">*<?=$genderErr;?></span>
   <br><br>
  <input type="submit" value="Submit">
</form>
<?php

echo "Your data: ";
echo $name, "<br><br>";
echo $email, "<br><br>";
echo $website, "<br><br>";
echo $comment, "<br><br>";
echo $gender, "<br><br>";
?>
</body>
</html>