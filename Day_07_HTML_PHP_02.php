<?php

$about_me = [
    "name"          => "Jamal Khan",
    "birth_year"    => 1968,
    "favorite_food" => "PIzza",
];

function calculate_age( $birth_year ) {
    $current_year = date( 'Y' );
    $age          = $current_year - $birth_year;
    return $age;
}
?>
<h2>Welcome!</h2>
<h2>About Me:</h2>

<?php
echo "<h3>Hello! I'm {$about_me['name']}</h3>";
echo "<p>I'm " . calculate_age( $about_me["birth_year"] ) . " years old!That's pretty cool</p>";
echo "<div>what more is there to say? I love {$about_me["favorite_food"]}, and that's pretty much it</div>";

?>

<h2>Now tell me a litte about me</h2>