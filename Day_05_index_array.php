<?php
// $name_array = array( "jamal", "karaim" );
// echo count( $name_array );
// echo "<br/>";
// echo $name_array[0];

// $name_array = ["jamal", "karaim", "sokina begum"];
// echo $number_array;
// print_r( $name_array );

// echo implode( "<br/>", $name_array );

// $message = ["Oh hey", " You're doing great", " Keep up the good work!\n"];

// $favorite_nums = [7, 201, 33, 88, 91];

// echo implode( '!', $message );
// echo "<br>";
// print_r( $favorite_nums );

// Accessing an Element

// $round_one = ["X", "X", "first winner"];

// $round_two = ["second winner", "X", "X", "X"];

// $round_three = ["X", "X", "X", "X", "third winner"];

// $winner = [$round_one[2], $round_two[0], $round_three[4]];

// print_r( $winner );

// echo implode( ",", $winner );

// Adding and Changing Elements

// $mixed_array    = [23, "jamal", "david", 35.89, 'a'];
// $mixed_array[]  = "another string added successfully";
// $mixed_array[]  = 45345;
// $mixed_array[1] = 28888883;

// echo implode( "<br />", $mixed_array );

// $my_array = ["tic", "tac", "toe"];

// array_pop( $my_array );
// $remove = array_pop( $my_array );
// print_r( $my_array );

// echo "<br />";

// array_push( $my_array, "Mango", "PHP", "OOP", "Laravel" );
// $add_array=array_push( $my_array, "MySql");
// print_r( $my_array );

// $record_holders = [];
// array_unshift( $record_holders, "Tim Montgomery", "Maurice Greene", "Donovan Bailey", "Leroy Burrell", "Carl Lewis" );
// array_shift( $record_holders );
// array_unshift( $record_holders, "Justin Gatlin", "Asafa Powell" );
// array_shift( $record_holders );
// array_unshift( $record_holders, "Usain Bolt" );

// echo implode( " || ", $record_holders );

$treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];

echo $treasure_hunt[3][4][2][0];