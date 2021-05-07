<?php
// Escape Sequences:
//terminal : \n,\t
//browser :<br /> &nbsp
/*
echo "1.PHP Tech";
echo "<br/>2. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another thing to do";
echo "<br/>3.Learn to \"fun\" ";
echo '<br/>4.Go to Gym';
echo '<br/>5.Go to \'dinner\'';
 */

/*
$dog_name      = "Tadpole";
$favorite_food = "salmon";
$color         = "brown";

echo "I have a {$color} dog named {$dog_name} and her favorite food is {$favorite_food}";
 */

/*
$favorite_food = "Red curry with eggplant";
echo "My favorite food is {$favorite_food}";
$favorite_food = "salmon fish";
echo "<br/>Nowdays i like to eat {$favorite_food} not Red Curry with eggplant";
 */
/*
$full_name = "david" . " albert" . " tom";
$full_name .= " son";
echo "{$full_name}<br/>";
 */
/*
echo "I am going on a picnic!";

$sentence = "<br/> I am going on a picnic, and I'm taking apples";
echo $sentence;

$sentence .= ", Banana";
echo $sentence;

$sentence .= ", Carrot.";
echo $sentence;
 */

/*
$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;

$order .= ", Chicken hot spicy burger";

$order .= ",Chicken Bites Burger";

echo $order;
echo "<br> {$very_bad_unclear_name}";

 */
// echo null / 10;
// echo 100 / null;

// function returnFive() {
//     return 5;
// }

// echo returnFive() + 3;

// function first() {
//     echo "You did it!<br>";
// }

// function second() {
//     echo "You\"re amazing!<br>";
// }

// echo first() . " " . second();

//local || global || static
// $name = "david";

// function printMessage() {
//     global $name;
//     $number = 13;
//     echo "{$number}<br/>";
//     echo "Hello,{$name}";
// }
// printMessage();
// echo "<br> I\"m from outside & print: {$name}";
// echo "<br/>{$number}";

// function printNum() {
//     static $num = 0;
//     echo $num, "<br/>";
//     $num++;
// }
// printNum();
// printNum();
// printNum();
// printNum();

// $name         = "Jamal Uddin";
// $age          = 34;
// $float_Number = 45.645;
// $bool         = true;
// echo gettype( $name ), "<br/>";
// echo gettype( $age ), "<br/>";
// echo gettype( $float_Number ), "<br/>";
// echo gettype( $bool ), "<br/>";

// var_dump( $name );
// echo "<br/>";
// var_dump( $age );
// echo "<br/>";
// var_dump( $float_Number );
// echo "<br/>";
// var_dump( $bool );

// echo "<br/>";
// echo "this is a bool: ", $bool;

//strlen strrev strtoupper strtolower str_repeat
// $name = "Karim Uddin";
// $num  = 34;
// echo strlen( $name );
// echo "<br/>", strlen( $num );
// echo "<br>", strrev( $name );
// echo "<br/>", strrev( $num );

// echo "<br/>", strtolower( $name );
// echo "<br/>", strtoupper( $name );
// echo "<br/>", str_repeat( "{$name}<br/>", 10 );

//abs() round() ceil() floor() rand() getrandmax;

// $mixed_array = array( 1, "Chicken Bites Burger", 34.67, "Hot spicey Burger" );
$mixed_array = [1, "Chicken Bites Burger", 34.67, "Hot spicey Burger"];

// echo count( $mixed_array );
// echo print_r( $mixed_array ), "<br/>";
// echo gettype( implode( $mixed_array ) );

// $mixed_array[]  = 456;
// $mixed_array[1] = "Singara";

// echo implode( " ", $mixed_array );

// $treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];

// echo $treasure_hunt[3][4][2][0];

// $php_short = [
//     "language"            => "PHP",
//     "creator"             => "Rasmus Lerdorf",
//     "year_created"        => 1995,
//     "filename_extensions" => [".php", ".phtml", ".php3", ".php4",
//         ".php5", ".php7", ".phps", ".php-s", ".pht", ".phar"],
// ];

// $september_hits = [
//     "The Sixth Sense" => 22896967,
//     "Stigmata"        => 18309666,
//     "Blue Streak"     => 19208806,
//     "Double Jeopardy" => 23162542,
// ];

// echo implode( " ", $september_hits );
// echo "<br/>";
// print_r( $september_hits );

$my_array        = ["panda" => "very cute", "lizard" => "cute", "cockroach" => "not very cute"];
$more_rankings   = ["capybara" => "cutest", "lizard" => "not cute", "dog" => "max cuteness"];
$animal_rankings = $my_array + $more_rankings;

print_r( $animal_rankings );
array_pop( $animal_rankings );
echo "<br>";
print_r( $animal_rankings );
echo "<br>";
array_push( $animal_rankings, ["dog" => "max cuteness"] );
print_r( $animal_rankings );
echo "<br>";