<?php
$counting_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// foreach ( $counting_array as $count ) {

//     echo "The count :{$count}<br/>";
// }
$details_array = ["color" => "blue", "shape" => "square"];

// foreach ( $details_array as $key => $value ) {

//     echo "{$key} => {$value}<br/> ";
// }

$scores = [
    "Alice"   => 99,
    "Bob"     => 95,
    "Charlie" => 98,
    "Destiny" => 91,
    "Edward"  => 88,
];

foreach ( $scores as $value ) {
    echo "Someone received a score of {$value}.<br/>";
}

foreach ( $scores as $key => $value ) {
    echo "<br/><br/>{$key} received a score of {$value}.<br/>";
}
