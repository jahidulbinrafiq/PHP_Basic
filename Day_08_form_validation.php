
<?php
$name = $email = $url = $comment = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $name    = verify_input( $_POST['name'] );
    $email   = verify_input( $_POST['email'] );
    $url     = verify_input( $_POST['url'] );
    $comment = verify_input( $_POST['comment'] );
}

function verify_input( $data ) {

    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    return $data;
}

?>
<!-- trim/htmlspecialchars/stripeslashes -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
<form action="<?=htmlspecialchars( $_SERVER['PHP_SELF'] );?>" method="post" >

  Name: <input type="text" name="name" id="">
  <br><br>
  email: <input type="email" name="email" id="">
  <br><br>
  url: <input type="url" name="url" id="">
  <br><br>
  comment: <textarea name="comment" id="" cols="30" rows="10"></textarea>
  <br><br>
  Genders: <input type="radio" name="gender" id="">Male
            <input type="radio" name="gender" id="">Female
    <br><br>
  <input type="submit" value="submit" name="submit">
</form>

<?PHP
echo "User Name: ${name}", "<br><br>";
echo "Email : {$email}", "<br><br>";
echo "Url : {$url}", "<br><br>";
echo "Comment : {$comment}", "<br><br>";
?>
</body>
</html>